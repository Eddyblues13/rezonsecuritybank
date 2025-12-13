<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use App\Models\Deposit;
use App\Mail\DebitEmail;
use App\Models\Activity;
use App\Models\Transfer;
use App\Mail\CreditEmail;
use App\Mail\sendUserEmail;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Mail\activateAccountEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;


class AdminController extends Controller
{
    public function adminHome()
    {
        $result  = DB::table('users')->where('user_type', '0')->get();
        $data['active_users'] = DB::table('users')->where('user_status', '1')->count();
        $data['inactive_users'] = DB::table('users')->where('user_status', '0')->count();
        $data['total_users']  = DB::table('users')->where('user_type', '0')->count();
        return view('admin.home', $data, compact('result'));
    }
    public function manageUsers()
    {
        $user  = DB::table('users')->where('user_type', '0')->get();
        return view('admin.manage_users', compact('user'));
    }

    public function manageDeposits()
    {
        if (Auth::id()) {

            $data['deposits'] = DB::table('users')
                ->join('deposits', 'users.id', '=', 'deposits.user_id')
                ->select('users.first_name', 'users.middle_name', 'users.last_name', 'users.email', 'users.currency', 'deposits.*')
                ->get();
            return view('admin.manage_deposit', $data);
        }
    }

    public function manageLoans()
    {
        if (Auth::id()) {

            $data['loans'] = DB::table('users')
                ->join('loans', 'users.id', '=', 'loans.user_id')
                ->select('users.first_name', 'users.middle_name', 'users.last_name', 'users.email', 'users.currency', 'loans.*')
                ->get();
            return view('admin.manage_loans', $data);
        }
    }

    public function manageTransactions()
    {
        if (Auth::id()) {

            $data['transactions'] = DB::table('users')
                ->join('transactions', 'users.id', '=', 'transactions.user_id')
                ->select('users.first_name', 'users.middle_name', 'users.last_name', 'users.email', 'users.currency', 'transactions.*')
                ->get();
            return view('admin.manage_transactions', $data);
        }
    }

    public function usersTransfer()
    {
        if (Auth::id()) {

            $data['transfers'] = DB::table('users')
                ->join('transfers', 'users.id', '=', 'transfers.user_id')
                ->select('users.first_name', 'users.middle_name', 'users.last_name', 'users.email', 'users.currency', 'transfers.*')
                ->get();

            return view('admin.users_transfer', $data);
        }
    }

    public function userProfile($user_id)
    {

        // get 
        $data['profileData']  = DB::table('users')
            ->where('id', $user_id)
            ->first();
        $data['total_deposit'] = Deposit::where('user_id', $user_id)->sum('deposit_amount');
        $data['total_transfer'] = Transfer::where('user_id', $user_id)->sum('transfer_amount');
        $data['total_loan'] = Loan::where('user_id', $user_id)->sum('loan_amount');
        $data['credit'] = Transaction::where('user_id', $user_id)->where('transaction_type', 'credit')->where('transaction_status', '1')->sum('transaction_amount');
        $data['debit'] = Transaction::where('user_id', $user_id)->where('transaction_type', 'debit')->where('transaction_status', '1')->sum('transaction_amount');
        $data['user_balance'] =  $data['credit'] - $data['debit'];
        return view('admin.user_data', $data);
    }

    public function transferHistory($id)
    {
        //  $data['user'] = DB::table('users')->where('id', $id)->first();
        //  $data['transfer'] = Transaction::join('transfer_histories', 'transactions.transaction_id', '=', 'transfer_histories.transaction_id')
        //      ->where('transactions.transaction_type', '=', 'Debit')
        //      ->get(['transactions.*', 'transfer_histories.amount',  'transfer_histories.wallet_address','transfer_histories.mode']);
        //  return view('admin.transfer_history', $data);
    }


    public function depositHistory($id)
    {
        //  $data['user'] = DB::table('users')->where('id', $id)->first();
        //  $data['deposit'] = Transaction::join('deposits', 'transactions.transaction_id', '=', 'deposits.transaction_id')
        //      ->where('transactions.transaction_type', '=', 'Credit')
        //      ->get(['transactions.*', 'deposits.amount',  'deposits.payment_method']);
        //  return view('admin.deposit_history', $data);
    }


    public function manageKyc()
    {
        $data['kyc'] = DB::table('users')
            ->where('user_type', '0')
            ->whereIn('kyc_status', ['0', '1', '2'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.manage_kyc', $data);
    }



    public function KycDetails($id)
    {
        $userProfile      = DB::table('users')->where('id', $id)->first();

        return view('admin.kyc', compact('userProfile'));
    }


    public function acceptKyc($id)
    {

        $user  = User::where('id', $id)->first();
        $user->kyc_status = 1;

        $user->save();
        return back()->with('message', 'Kyc Approved Successfully');
    }


    public function rejectKyc($id)
    {

        $user  = User::where('id', $id)->first();
        $user->kyc_status = 2;
        $email = $user->email;
        $user->save();
        return back()->with('message', 'Kyc Rejected Successfully');;
    }

    public function sendMail(Request $request)

    {

        if (Auth::check()) {

            $email = $request->input('email');
            //$subject = $request->input('subject');
            $data = [
                'message' => $request->message,
                'subject' => $request->subject,
            ];


            Mail::to($email)->send(new sendUserEmail($data));

            return back()->with('status', 'Email Successfully sent');
        }
    }

    public function userVerification($id)
    {
        $user_data = DB::table('users')->where('id', $id)->first();
        $full_name = $user_data->first_name;
        $email =   $user_data->email;
        $user = [

            'full_name' => $full_name,
        ];

        // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['user_status'] = '1';
        $update = DB::table('users')->where('id', $id)->update($status);
        return redirect()->back()->with('message', 'Successful!! User Has Been Verified, they can now login thier account');
    }

    public function userSuspension($id)
    {

        $status = array();
        $status['user_status'] = '0';
        $update = DB::table('users')->where('id', $id)->update($status);
        return redirect()->back()->with('message', 'User Has Been Suspended Successfully');
    }

    public function clearAccount($id)
    {
        $user = User::find($id);
        if ($user) {

            $user->loan()->delete();
            $user->deposit()->delete();
            $user->transaction()->delete();
            $user->transfer()->delete();




            return back()->with('message', 'Records deleted successfully');
        } else {
            return back()->with('message', 'User Not Found');
        }
    }

    public function deleteUser($id)
    {

        $user  = User::findOrFail($id);
        $user->delete();
        return redirect('manage-users')->with('message', 'User deleted Successfully');
    }


    public function creditDebit(Request $request)
    {
        // Generate a random alphanumeric string
        $randomString = strtoupper(Str::random(8));

        // Generate a random 4-digit number
        $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Concatenate the parts to form the code
        $transaction_id = "CAP/$randomString-$randomNumber";


        $transaction = new Transaction;
        $transaction->user_id = $request->input('user_id');
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_ref = $transaction_id;
        $transaction->scope = $request->input('scope');
        $transaction->transaction_type = $request->input('type');
        $transaction->transaction_description = $request->input('decscription');
        $transaction->transaction_amount =  $request['amount'];
        $transaction->transaction_status = 1;
        $transaction->save();


        $full_name = $request['name'];
        $email =  $request['email'];
        $amount = $request->input('amount');
        $date = Carbon::now();
        $balance =  $request['balance'] + $request['amount'];
        $description =  $request['description'];
        $a_number =  $request['account_number'];
        $currency =  $request['currency'];

        $user = [

            'account_number' => $a_number,
            'account_name' => $full_name,
            'full_name' => $full_name,
            'description' => $description,
            'amount' => $amount,
            'date' => $date,
            'balance' => $balance,
            'currency' => $currency,
            'ref' => $transaction_id,
        ];

        $transaction_type =  $request->input('user_id');

        if ($transaction_type == "Credit") {
            Mail::to($email)->send(new CreditEmail($user));
        }
        if ($transaction_type == "Debit") {
            Mail::to($email)->send(new DebitEmail($user));
        }



        return back()->with('message', 'Account Funded Successfully');
    }

    public function approveTransfer($id)
    {
        $transfer_data = DB::table('transfers')->where('id', $id)->first();
        $user_id = $transfer_data->user_id;
        $transfer_id = $transfer_data->transfer_id;
        $transfer_amount = $transfer_data->transfer_amount;
        $description = $transfer_data->description;

        $transaction = new Transaction;
        $transaction->user_id = $user_id;
        $transaction->transaction_id = $transfer_id;
        $transaction->transaction_ref = $transfer_id;
        $transaction->scope = "International Transfer";
        $transaction->transaction_type = 'Debit';
        $transaction->transaction_description = "Transfer";
        $transaction->transaction_amount =  $transfer_amount;
        $transaction->transaction_status = 1;
        $transaction->save();


        // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['transfer_status'] = '1';
        $update = DB::table('transfers')->where('id', $id)->update($status);
        return back()->with('message', 'Transaction has been approved, successfully');
    }
    public function approvedTransfer($id)
    {

        $status = array();
        $status['transfer_status'] = '1';
        //$status['transaction_status'] = '1';
        $update = DB::table('transfers')->where('transfer_id', "==", $id)->update($status);
        //$update = DB::table('transactions')->where('transaction_id', $id)->update($status);
        return back()->with('message', 'Transaction has been approved, successfully');
    }

    public function declineTransfer($id)
    {
        $transfer_data = DB::table('transfers')->where('id', $id)->first();
        $user_id = $transfer_data->user_id;
        $transfer_id = $transfer_data->transfer_id;
        $transfer_id = $transfer_data->transfer_id;
        $transfer_amount = $transfer_data->transfer_amount;
        $description = $transfer_data->description;

        $transaction = new Transaction;
        $transaction->user_id = $user_id;
        $transaction->transaction_id = $transfer_id;
        $transaction->transaction_ref = $transfer_id;
        $transaction->scope = "International Transfer";
        $transaction->transaction_type = 'Debit';
        $transaction->transaction_description = $description;
        $transaction->transaction_amount =  $transfer_amount;
        $transaction->transaction_status = 0;
        $transaction->save();


        // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['transfer_status'] = '0';
        $update = DB::table('transfers')->where('id', $id)->update($status);
        return back()->with('message', 'Transaction has been declined, successfully');
    }

    public function declinedTransfer($id)
    {
        $transfer_data = DB::table('transfers')->where('id', $id)->first();
        $user_id = $transfer_data->user_id;
        $transfer_id = $transfer_data->transfer_id;
        $transfer_amount = $transfer_data->transfer_amount;
        $description = $transfer_data->description;

        $transaction = new Transaction;
        $transaction->user_id = $user_id;
        $transaction->transaction_id = $transfer_id;
        $transaction->transaction_ref = $transfer_id;
        $transaction->scope = "International Transfer";
        $transaction->transaction_type = 'Debit';
        $transaction->transaction_description = $description;
        $transaction->transaction_amount =  $transfer_amount;
        $transaction->transaction_status = 0;
        $transaction->save();


        // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['transfer_status'] = '0';
        $update = DB::table('transfers')->where('id', $id)->update($status);
        return back()->with('message', 'Transaction has been declined, successfully');
    }

    public function approveTransaction($id)
    {

        $status = array();
        $status['transaction_status'] = '1';
        $update = DB::table('transactions')->where('id', $id)->update($status);
        return back()->with('message', 'Transaction has been approved, successfully');
    }

    public function declineTransaction($id)
    {
        $status = array();
        $status['transaction_status'] = '0';
        $update = DB::table('transactions')->where('id', $id)->update($status);
        return back()->with('message', 'Transaction has been declined, successfully');
    }

    public function icCode(Request $request)
    {
        $users = array();
        $users['ic_code'] = $request->input('ic_code');;
        $update = DB::table('users')->update($users);
        return back()->with('message', 'IC Code updated, successfully');
    }

    public function tinCode(Request $request)
    {
        $users = array();
        $users['tin_code'] = $request->input('tin_code');;
        $update = DB::table('users')->update($users);
        return back()->with('message', 'TIN Code updated, successfully');
    }
    public function tacCode(Request $request)
    {
        $users = array();
        $users['tac_code'] = $request->input('tac_code');;
        $update = DB::table('users')->update($users);
        return back()->with('message', 'TAC Code updated, successfully');
    }

    public function approveLoan($id)
    {
        $loan_data = DB::table('loans')->where('id', $id)->first();
        $user_id = $loan_data->user_id;
        $loan_id = $loan_data->loan_id;
        $loan_amount = $loan_data->loan_amount;
        $description = $loan_data->loan_purpose;

        $transaction = new Transaction;
        $transaction->user_id = $user_id;
        $transaction->transaction_id = $loan_id;
        $transaction->transaction_ref = $loan_id;
        $transaction->scope = "International Transfer";
        $transaction->transaction_type = 'Debit';
        $transaction->transaction_description = $description;
        $transaction->transaction_amount =  $loan_amount;
        $transaction->transaction_status = 1;
        $transaction->save();


        // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['loan_status'] = '1';
        $update = DB::table('loans')->where('id', $id)->update($status);
        return back()->with('message', 'Loan Transaction has been approved, successfully');
    }

    public function declineLoan($id)
    {
        $loan_data = DB::table('loans')->where('id', $id)->first();
        $user_id = $loan_data->user_id;
        $loan_id = $loan_data->loan_id;
        $loan_amount = $loan_data->loan_amount;
        $description = $loan_data->loan_purpose;

        $transaction = new Transaction;
        $transaction->user_id = $user_id;
        $transaction->transaction_id = $loan_id;
        $transaction->transaction_ref = $loan_id;
        $transaction->scope = "International Transfer";
        $transaction->transaction_type = 'Debit';
        $transaction->transaction_description = $description;
        $transaction->transaction_amount =  $loan_amount;
        $transaction->transaction_status = 1;
        $transaction->save();


        // Mail::to($email)->send(new activateAccountEmail($user));
        $status = array();
        $status['loan_status'] = '0';
        $update = DB::table('loans')->where('id', $id)->update($status);
        return back()->with('message', 'Loan Transaction has been declined, successfully');
    }


    public function manageUserTransfers($id)
    {

        // get 
        $data['profileData']  = DB::table('users')
            ->where('id', $id)
            ->first();

        $data['transfers'] = Transfer::where('user_id', $id)->get();

        return view('admin.user_transfer_history', $data);
    }


    public function manageUserTransactions($id)
    {

        // get 
        $data['profileData']  = DB::table('users')
            ->where('id', $id)
            ->first();

        $data['transactions'] = Transaction::where('user_id', $id)->get();

        return view('admin.user_transaction_history', $data);
    }

    public function manageUserLoans($id)
    {

        // get 
        $data['profileData']  = DB::table('users')
            ->where('id', $id)
            ->first();

        $data['loans'] = Loan::where('user_id', $id)->get();

        return view('admin.user_loan_history', $data);
    }


    public function manageUserDeposits($id)
    {

        // get 
        $data['profileData']  = DB::table('users')
            ->where('id', $id)
            ->first();

        $data['deposits'] = Deposit::where('user_id', $id)->get();

        return view('admin.user_deposit_history', $data);
    }


    public function impersonate(User $user)
    {
        // Store the original user's ID in the session (if not already stored)
        if (!session()->has('impersonate')) {
            session()->put('impersonate', Auth::id());
        }

        // Impersonate the specified user
        Auth::loginUsingId($user->id);


        // $data['clientIpAddress'] = $request->getClientIp();
        // $data['userIp'] = $request->ip();
        // $data['location'] = Location::get($data['userIp']);

        // Use the Location facade to get the user's location
        // $location = Location::get($data['userIp']);

        // // Determine the flag URL
        // $data['flagUrl'] = '';
        // if ($location && $location->countryCode) {
        //     $data['flagUrl'] = "https://flagcdn.com/24x18/" . strtolower($location->countryCode) . ".png";
        // }


        $data['credits'] = Transaction::where('user_id', $user->id)->where('transaction_type', 'Credit')->sum('transaction_amount');
        $data['debits'] = Transaction::where('user_id', $user->id)->where('transaction_type', 'Debit')->sum('transaction_amount');
        $data['balance'] = $data['credits'] - $data['debits'];
        $data['transactions'] = DB::table('transactions')->take(1)->where('user_id', $user->id)->get();
        $data['activity'] = Activity::where('user_id', $user->id)->orderBy('created_at', 'desc')->skip(1)->take(1)->first();
        // Redirect to the user's home page with the relevant data
        return view('dashboard.home', $data)->with('message', 'You are logged in as ' . $user->first_name . ' ' . $user->last_name);
    }


    public function leaveImpersonate()
    {
        // Check if the session has an 'impersonate' value
        if (session()->has('impersonate')) {
            // Retrieve the original user's ID from the session
            $originalUserId = session()->get('impersonate');

            // Log in as the original user
            Auth::loginUsingId($originalUserId);

            // Forget the impersonation session data
            session()->forget('impersonate');


            // $data['clientIpAddress'] = $request->getClientIp();
            // $data['userIp'] = $request->ip();
            // $data['location'] = Location::get($data['userIp']);

            // // Use the Location facade to get the user's location
            // $location = Location::get($data['userIp']);

            // // Determine the flag URL
            // $data['flagUrl'] = '';
            // if ($location && $location->countryCode) {
            //     $data['flagUrl'] = "https://flagcdn.com/24x18/" . strtolower($location->countryCode) . ".png";
            // }





            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            $data['transactions'] = DB::table('transactions')->take(1)->where('user_id', Auth::user()->id)->get();
            $data['activity'] = Activity::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->skip(1)->take(1)->first();


            // Redirect to the original user's dashboard or home page
            return redirect()->route('admin.home', $data)->with('message', 'You have returned to your original account.');
        }

        // If no impersonation is happening, redirect to home
        return redirect()->route('admin.home')->with('message', 'No impersonation found.');
    }
}

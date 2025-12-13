<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Deposit;
use App\Models\Activity;

use App\Models\Transfer;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{


    public function myAccount()
    {
        if (Auth::id()) {

            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.my_account', $data);
        }
    }

    public function summary()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            $data['transactions'] = DB::table('transactions')->where('user_id', Auth::user()->id)->get();
            return view('dashboard.summary', $data);
        }
    }
    public function profile()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.profile', $data);
        }
    }

    public function accountSettings()
    {
        if (Auth::id()) {

            $data['activity'] = Activity::where('user_id', Auth::user()->id)->take(10)->get();
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.account_settings', $data);
        }
    }
    public function activityLog()
    {
        if (Auth::id()) {

            $data['activity'] = Activity::where('user_id', Auth::user()->id)->get();
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.activity_log', $data);
        }
    }

    public function resetPassword()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.reset_password', $data);
        }
    }

    public function transfer()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();
            return view('dashboard.transfer', $data);
        }
    }

    public function firstTransfer(Request $request)
    {
        if (Auth::id()) {

            $data['amount'] = $request->input('amount');

            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.transfer_step_two', $data);
        }
    }

    public function secondTransfer(Request $request)
    {
        if (Auth::id()) {

            $data['amount'] = $request->input('amount');
            $data['account_holder'] = $request->input('account_holder');
            $data['account_number'] = $request->input('account_number');
            $data['bank_name'] = $request->input('bank_name');
            $data['description'] = $request->input('description');

            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            // Generate a random alphanumeric string
            $randomString = strtoupper(Str::random(8));

            // Generate a random 4-digit number
            $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

            // Concatenate the parts to form the code
            $transaction_id = "CAP/$randomString-$randomNumber";

            $transfer = new Transfer;
            $transfer->user_id = Auth::user()->id;
            $transfer->transfer_id = $transaction_id;
            $transfer->transfer_amount =  $request['amount'];
            $transfer->account_holder  = $request['account_holder'];
            $transfer->account_number   = $request['account_number'];
            $transfer->bank_name = $request['bank_name'];
            $transfer->description  = $request['description'];
            $transfer->transfer_status = 0;
            $transfer->save();
            // $transaction = new Transaction;
            // $transaction->user_id = Auth::user()->id;
            // $transaction->transaction_id = $transaction_id;
            // $transaction->transaction_ref = $transaction_id;
            // $transaction->scope = $request->input('scope');
            // $transaction->transaction_type = $request->input('type');
            // $transaction->transaction_description = $request->input('decscription');
            // $transaction->transaction_amount =  $request['amount'];
            // $transaction->transaction_status = 0;
            // $transaction->save();
            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.transfer', $data);
        }
    }

    public function cancelTransfer(Request $request, $id)
    {
        if (Auth::id()) {



            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];


            $transfer  = Transfer::findOrFail($id);
            $transfer->delete();
            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.transfer', $data);
        }
    }

    public function completeTransfer(Request $request)
    {
        if (Auth::id()) {

            $data['transaction_id'] = $request->input('transaction_id');
            $data['amount'] = $request->input('amount');

            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];


            // $transaction = new Transaction;
            // $transaction->user_id = Auth::user()->id;
            // $transaction->transaction_id = $request->input('transaction_id');
            // $transaction->transaction_ref = $request->input('transaction_id');
            // $transaction->scope = 'International Transfer';
            // $transaction->transaction_type = 'Debit';
            // $transaction->transaction_description = $request->input('description');
            // $transaction->transaction_amount =  $request['amount'];
            // $transaction->transaction_status = 0;
            // $transaction->save();


            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.transfer_step_three', $data);
        }
    }

    public function finalTransfer(Request $request)
    {
        if (Auth::id()) {

            $code = $request->input('code');

            if ($code != Auth::user()->tac_code) {
                return redirect('ic_code')->with('error', 'Incorrect TAC Code, please contact your administrator');
            }

            $data['transaction_id'] = $request->input('transaction_id');
            $data['amount'] = $request->input('amount');

            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];


            // $transaction = new Transaction;
            // $transaction->user_id = Auth::user()->id;
            // $transaction->transaction_id = $request->input('transaction_id');
            // $transaction->transaction_ref = $request->input('transaction_id');
            // $transaction->scope = 'International Transfer';
            // $transaction->transaction_type = 'Debit';
            // $transaction->transaction_description = $request->input('description');
            // $transaction->transaction_amount =  $request['amount'];
            // $transaction->transaction_status = 0;
            // $transaction->save();


            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();


            $data['clientIpAddress'] = $request->getClientIp();
            $data['userIp'] = $request->ip();
            $data['location'] = Location::get($data['userIp']);

            // Use the Location facade to get the user's location
            $location = Location::get($data['userIp']);

            // Determine the flag URL
            $data['flagUrl'] = '';
            if ($location && $location->countryCode) {
                $data['flagUrl'] = "https://flagcdn.com/24x18/" . strtolower($location->countryCode) . ".png";
            }





            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            $data['transactions'] = DB::table('transactions')->where('user_id', Auth::user()->id)->get();
            $data['activity'] = Activity::where('user_id', Auth::user()->id)->skip(1)->take(1)->first();


            return redirect('ic_code')->with('error', 'Your account is not activated, please contact your administrator, for more information');
        }
    }

    public function CrossTransfer()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.cross_border_transfer', $data);
        }
    }

    public function authenticating()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.transfer_step_three', $data);
        }
    }

    public function vatCode()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.transfer_step_four', $data);
        }
    }
    public function icCode()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.ic_code', $data);
        }
    }
    public function tinCode(Request $request)
    {
        $code = $request->input('code');

        if ($code != Auth::user()->ic_code) {
            return back()->with('error', 'Incorrect IC Code');
        }

        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.tin_code', $data);
        }
    }
    public function tacCode(Request $request)
    {
        $code = $request->input('code');

        if ($code != Auth::user()->tin_code) {
            return redirect('ic_code')->with('error', 'Incorrect TIN Code, please contact your administrator');
        }
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            $data['transfer'] = DB::table('transfers')
                ->where('user_id', Auth::user()->id)
                ->where('transfer_status', '0')
                ->latest('created_at')
                ->first();

            return view('dashboard.tac_code', $data);
        }
    }

    public function checkDeposit()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.check_deposit', $data);
        }
    }

    public function makeDeposit(Request $request)
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];


            // Generate a random alphanumeric string
            $randomString = strtoupper(Str::random(8));

            // Generate a random 4-digit number
            $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

            // Concatenate the parts to form the code
            $transaction_id = "CAP/$randomString-$randomNumber";

            $deposit = new Deposit;
            $deposit->user_id = Auth::user()->id;
            $deposit->deposit_id = $transaction_id;
            $deposit->deposit_amount =  $request['amount'];

            if ($request->hasFile('front_check')) {
                $file = $request->file('front_check');

                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('uploads/deposits', $filename);
                $deposit->front_check =  $filename;
            }

            if ($request->hasFile('back_check')) {
                $file = $request->file('back_check');

                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('uploads/deposits', $filename);
                $deposit->back_check =  $filename;
            }
            $deposit->save();


            return view('dashboard.deposit_successful', $data)->with('message', 'Account Funded Successfully');
        }
    }

    public function bills()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.bills', $data);
        }
    }


    public function kyc()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.kyc', $data);
        }
    }

    public function kycForm()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.kyc_form', $data);
        }
    }


    public function loan()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.loan', $data);
        }
    }
    public function loanHistory()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.loan_history', $data);
        }
    }


    public function support()
    {
        if (Auth::id()) {
            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            $data['tickets'] = DB::table('tickets')->where('user_id', Auth::user()->id)->get();
            return view('dashboard.support', $data);
        }
    }

    public function supportTicket(Request $request)
    {
        if (Auth::id()) {


            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            $data['tickets'] = DB::table('tickets')->where('user_id', Auth::user()->id)->get();
            // Generate a random alphanumeric string
            $randomString = strtoupper(Str::random(8));

            // Generate a random 4-digit number
            $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

            // Concatenate the parts to form the code
            $ticket_id = "CAP/$randomString-$randomNumber";

            $transfer = new Ticket;
            $transfer->user_id = Auth::user()->id;
            $transfer->ticket_id = $ticket_id;
            $transfer->ticket_department =  $request['department'];
            $transfer->ticket_comment  = $request['message'];
            $transfer->ticket_status = 0;
            $transfer->save();

            return back()->with('status', 'support ticket generated successfully');
        }
    }

    public function deleteTicket($ticket_id)
    {
        if (Auth::id()) {


            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            $data['tickets'] = DB::table('tickets')->where('user_id', Auth::user()->id)->get();

            $ticket  = Ticket::findOrFail($ticket_id)->where('id', $ticket_id)->first();
            $ticket->delete();
            return back()->with('status', 'support ticket deleted successfully');
        }
    }

    public function card()
    {
        if (Auth::id()) {


            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];
            return view('dashboard.card', $data);
        }
    }





    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return response()->json([
                "content" => 'error',
                "message" => 'Old Password Does not match!',
                "redirect" => url("reset_password")
            ]);
            //return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return response()->json([
            "content" => 'success',
            "message" => 'Old Password Does not match!',
            "redirect" => url("reset_password")
        ]);

        // return back()->with("success", "Password changed successfully!");


    }

    public function uploadKyc(Request $request)
    {

        $kyc =  Auth::user();
        $kyc->first_name = $request['first_name'];
        $kyc->last_name = $request['last_name'];
        $kyc->phone_number = $request['phone_number'];
        $kyc->date_of_birth = $request['date_of_birth'];
        $kyc->phone_number = $request['phone_number'];
        $kyc->address_one = $request['address_one'];
        $kyc->address_two = $request['address_two'];
        $kyc->city = $request['city'];
        $kyc->state = $request['state'];
        $kyc->country = $request['country'];
        $kyc->zip_code = $request['zip_code'];
        $kyc->id_type = $request['id_type'];
        $kyc->kyc_status = 0;
        $file_front_id_card = $request->file('front');
        $file_back_id_card = $request->file('back');
        $ext_front_id_card = $file_front_id_card->getClientOriginalExtension();
        $ext_back_id_card = $file_back_id_card->getClientOriginalExtension();
        $filename_front_id_card = time() . '.' . $ext_front_id_card;
        $filename_back_id_card = time() . '.' . $ext_back_id_card;
        $file_front_id_card->move('uploads/kyc/', $filename_front_id_card);
        $file_back_id_card->move('uploads/kyc/', $filename_back_id_card);
        $kyc->front_id =  $filename_front_id_card;
        $kyc->back_id =  $filename_back_id_card;
        $kyc->save();
        return redirect('kyc_form')->with('success', 'Document updated successfully, please wait for approval');
    }


    public function requestLoan(Request $request)
    {
        if (Auth::id()) {


            $data['credits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Credit')->sum('transaction_amount');
            $data['debits'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1')->where('transaction_type', 'Debit')->sum('transaction_amount');
            $data['balance'] = $data['credits'] - $data['debits'];

            // Generate a random alphanumeric string
            $randomString = strtoupper(Str::random(8));

            // Generate a random 4-digit number
            $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

            // Concatenate the parts to form the code
            $loan_id = "CAP/$randomString-$randomNumber";

            $transfer = new Loan;
            $transfer->user_id = Auth::user()->id;
            $transfer->loan_id = $loan_id;
            $transfer->loan_amount =  $request['amount'];
            $transfer->loan_facility  = $request['facility'];
            $transfer->loan_tenure   = $request['tenure'];
            $transfer->loan_purpose = $request['reason'];
            $transfer->loan_status  = 0;
            $transfer->save();


            return back()->with('message', 'loan application was successful, please wait for approval from the administrator');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('web')->logout();
        return redirect('verify');
    }
}

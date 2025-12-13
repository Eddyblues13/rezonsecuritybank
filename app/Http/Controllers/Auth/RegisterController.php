<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\welcomeEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string', 'max:255'],
            'home_address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'currency' => ['required', 'string', 'max:255'],
            'account_type' => ['required', 'string', 'max:255'],
            'passport' => ['required', 'image', 'max:51200'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $file = $data['passport'];
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('uploads/passport', $filename);


        $accountNumber = rand(1645566556, 5575755768);
        $user = User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'city' => $data['city'],
            'date_of_birth' => $data['date_of_birth'],
            'address_one' => $data['home_address'],
            'phone_number' => $data['phone_number'],
            'occupation' => $data['occupation'],
            'currency' => $data['currency'],
            'account_type' => $data['account_type'],
            'account_number' => $accountNumber,
            'passport' =>  $filename,
            'email' => $data['email'],
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
        ]);

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'lname' => $user->lname,
            'a_number' => $accountNumber,
            'country' => $user->country,
            'password' => $data['password'],

        ];

        $user_email =   $data['email'];

        Mail::to($user_email)->send(new welcomeEmail($data));
        return $user;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Models\Activity;
use App\Events\loginEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        // Get the user agent string
        $userAgent = $request->header('User-Agent');

        // Log the user agent or store it in the database
        Log::info('User logged in with user agent: ' . $userAgent);

        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp(),
            'last_login_user_agent' => $userAgent
        ]);

        Activity::create([
            'user_id'   => $user->id,
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp(),
            'last_login_user_agent' => $userAgent
        ]);

        // By default, redirect to intended URL after login
        return redirect()->intended($this->redirectPath());
    }

    public function username()
    {
        $loginValue = request()->input('account_number');

        $this->account_number = filter_var($loginValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'account_number';
        request()->merge([$this->account_number => $loginValue]);
        return property_exists($this, 'account_number') ? $this->account_number : 'email';
    }
}

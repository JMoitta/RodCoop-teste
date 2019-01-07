<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $maxAttempts = 1;

    protected $decayMinutes = 1;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginSocial(Request $request)
    {
        $this->validate($request, [
            'social_type' => 'required|in:google,github',
        ]);

        $socialType = $request->get('social_type');
        \Session::put('social_type', $socialType);
        return \Socialite::driver($socialType)->redirect();
    }

    public function loginCallback()
    {
        $socialType = \Session::pull('social_type');
        $userSocial = \Socialite::driver($socialType)->user();

        $user = User::where('email', $userSocial->email)->first();
        if(!$user){
            User::create([
                'name' => $userSocial->name,
                'email' => $userSocial->email,
                // 'password' => bcrypt(str_random(8)),
                'password' => bcrypt('123456'),
                'role' => User::ROLE_USER,
                'phone' => '000',
                'cpf' => '000',
            ]); 
        }
        \Auth::login($user, false);
        return redirect()->intended($this->redirectPath());
    }

    public function redirectTo()
    {
        return \Auth::user()->role == User::ROLE_ADMIN ? '/admin/home' : '/home';
    }

     /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect($request->is('admin/*') ? '/admin/login' : '/login');
    }

    protected function credentials(Request $request)
    {
        $data = $request->only($this->username(),'password');
        //$data['phone'] = $data['email'];
        $usernameKey = $this->usernameKey();
        if($usernameKey != $this->username()) {
            $data[$this->usernameKey()] = $data[$this->username()];
            unset($data[$this->username()]);
        }
        return $data;
    }

    protected function usernameKey()
    {
        $email = \Request::get('email'); //email,phone,cpf
        $validator = \Validator::make([
            'email' => $email
        ], ['email' => 'cpf']);
        if (!$validator->fails()) {
            return 'cpf';
        }
        if (is_numeric($email)) {
            return 'phone';
        }
        return 'email';
    }
}

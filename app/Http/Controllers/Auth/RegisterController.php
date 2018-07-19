<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;
use App\UserAccount;
use App\Http\Controllers\Controller;
/* TODO: why need?
use Illuminate\Support\Facades\Auth; */
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createGoogleUser(array $data)
    {
        $userAccount = UserAccount::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'account_type' => $data['account_type'],
            // 'user_id' => $userId,
        ]);

        // TODO: change to UserAccount::user_id?
        $hasUser = User::where('email', $data['email'])->first();

        // If user already exists, relate account and return
        if($hasUser) {
            $userAccount->user_id = $hasUser->id;
            $userAccount->save();
            return $hasUser;
            // $this->guard()->login($hasUser);
            // return redirect('/home');
        }

        // Else first time user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'username' => $data['name'],
        ]);

        $userAccount->user_id = $user->id;
        $userAccount->save();

        return $user;
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->scopes('email')->stateless()->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $socialUser = Socialite::driver('google')->stateless()->user();
        // $token = $user->token;

        $emails = $socialUser->user['emails'];
        $emailKey = array_search('accounts', array_column($emails, 'type'));
        $data['name'] = $socialUser->user['displayName'];
        $data['email'] = $emails[$emailKey]['value'];
        $data['account_type'] = 'google';

        // TODO: quick hack to log in first if account exists
        $hasAccount = UserAccount::where('email', $data['email'])->where('account_type', 'google')->first();
        if($hasAccount) {
          $user = $hasAccount->user()->first();
          $this->guard()->login($user);
          return redirect('/');
        }

        event(new Registered($user = $this->createGoogleUser($data)));
        $this->guard()->login($user);
        return redirect('/');
    }
}

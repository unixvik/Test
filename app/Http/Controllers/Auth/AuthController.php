<?php

namespace Vik\Http\Controllers\Auth;

use Vik\User;
use Validator;
use Vik\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Carbon\Carbon;
use Vik\User_Detail;
use DB;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    private $redirectTo = '/';
    protected $username = 'username';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         $test=User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'admin' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'active' => '1',
            'last_modify' => 'system'
        ]);

//         User_Detail::create([
//            'user_id' => $test->id,
//            'first_name' => $data['first_name'],
//            'last_name' => $data['last_name']
//        ]);
//        //$getID = DB::table('users')->where('username', $data['username'])->first();

        $user_details=[
            'id' => $test->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name']
        ];
        $x= DB::table('user_profile')->insert($user_details);
      //  return $user_details->save([$user_details]);
        return $test;

    }
}

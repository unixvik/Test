<?php

namespace Vik\Http\Controllers;

use Illuminate\Http\Request;
use Vik\Http\Requests;
use Vik\Http\Controllers\Controller;
use DB;
use Config;
use Auth;
use View;

class PagesController extends Controller
{

    public function __construct()
    {
$user='';
        if(Auth::user()) {
            $user = DB::table('users_vw')->where('id', \Auth::user()->id)->first();
        } else {
//            $user = New \stdClass();
//            $user->username='Guest';
        }
        return View::share('user', $user);
    }
    public static function loginUsers()
    {
        return View('login');
    }
    public static function registerUsers()
    {
        return View('admin.register');
    }
    public static function manageUsers()
    {
        return View('admin.manage');
    }
    public static function contact()
    {
        return View('contact');
    }

    public static function index()
    {
//        Config::set('database.fetch' PDO::FETCH_ASSOC);
    //    $user=DB::table('users_vw')->where('id', \Auth::user()->id)->first();


//        $user=;
        return View('welcome');

    }
}

<?php
/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 09/03/2017
 * Time: 12:41
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends BaseController {

    public function postLogin()
    {
        $email=Input::get('email');
        $password=Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            return Redirect::route('index');

        }else{

            return Redirect::route('index')
                ->with('error','Please check your password & email');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * @return mixed
     */
    public function showLogin()
    {
        // show the form
        return view('login');
    }

    /**
     * @return mixed
     */
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('home'); // redirect the user to the login screen
    }

}

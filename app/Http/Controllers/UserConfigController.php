<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConfigController extends Controller
{
    public function log_in() {

    	return view('auth.log_in');

    }

    public function sign_up() {

    	return view('auth.sign_up');

    }
}

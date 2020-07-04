<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function create($register_success = null){
		return view('session.login', ['register_success' => $register_success]);
	}
}

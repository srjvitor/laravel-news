<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    public function store(Request $request){

        $user = new User;
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;  

        if( $user->save()) {
          return redirect()->route('login', ['register_success' => true]);
        }    
    }

    public function show(Request $request){

			$user = DB::table('users')
			->where([
        ['email', '=', $request->email],
        ['password', '=', $request->password],
			])
			->first();

			if (empty($user->id)){
				return response()->json(['login', 'false']);
			}else{
				return redirect()->route('home', ['register_success' => true]);
			}
    }
}
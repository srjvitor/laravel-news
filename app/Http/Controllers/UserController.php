<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function store(request $request){

        $user = new User;
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;  

        if( $user->save()) {
          return redirect()->route('login', ['register' => true]);
        }    
    }

    public function show(request $request){

      $users = DB::table('users')->where([
        ['email', '=', $request->email],
        ['password', '=', $request->password],
      ])->get('id');

      if( $users ){
        return response()->json([ 'users' => $users ]);
      }else{
        return response()->json([ 'users' => 'falso' ]);
      }

      
    }
}
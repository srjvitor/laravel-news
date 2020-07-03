<?php

namespace App\Http\Controllers;


use App\Notice;
use Illuminate\Http\Request;
use Redirect;

class NoticeController extends Controller
{
    public function index()
    { 
    }

    public function store(Request $request)
    {
        $notice = new Notice;
        
        $notice->name = $request->name;
        $notice->email = $request->email;
        $notice->password = $request->password;  

        if( $user->save()) {
          return redirect()->route('login', ['register' => true]);
        }    
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}

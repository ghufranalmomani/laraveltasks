<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form_validte extends Controller
{
 
    public function form_validate(Request $request){
        $request->validate([
            'firstname'=>'required|alpha',
            'Secoundname'=>'required|alpha',
            'email'=>'required|email',       
            'phonenumber'=>'numeric|digits_between:9,11',
            'city'=>'required|alpha',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
        ]);
     
        return $request->input(); }
}
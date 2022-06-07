<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PagesController extends Controller
{
    // public function index($id, $name){
    //     return 'the user id is '.$id. ' and the name is '.$name;
    // }


    public function index($id,$name){
        return 'the user id is' .$id. 'and the name is'.$name;
        }
        public function post(){
            return User::find(1)->posts;  
        }


}

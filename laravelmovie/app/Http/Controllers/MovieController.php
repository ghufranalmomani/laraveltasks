<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function view2()
{
    $view2 = movie::all();
    return view('movies',compact('view2'));
}

public function viewadd()
{
    return view('add');
}


public function createData(Request $request){
    $create=new Movie();
    $create->MovieName=$request->input('MovieName');
    $create->MovieDes=$request->input('MovieDes');
    $create->MovieGen=$request->input('MovieGen');
    $create->Movie=$request->input('Movie');
    $create->save();
    return redirect('movies')->with('message','The data has been added successfully');
 }

 public function update(Request $request)
 {
     return view('update');
 }

 public function view(Request $request,$id)
 {
     $view3 = movie::find($id);
     return view('update',compact('view3'));
 }

 public function update1(Request $request,$id){
    $update= movie::find($id);
    $update->MovieName=$request->input('MovieName');
    $update->MovieDes=$request->input('MovieDes');
    $update->MovieGen=$request->input('MovieGen');
    $update->Movie=$request->input('Movie');
    $update->save();
    return redirect('movies')->with('message','The data has been updated successfully');
 }

 public function delete($id)
 {
     $delete = movie::find($id);
     $delete->delete();
     return redirect('movies');
 }
}

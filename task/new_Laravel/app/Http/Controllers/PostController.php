<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller

{
     // public function ViewData(){
        
    // }
    public function home(){
        $post2= post::all();
        return view('home', compact('post2'));
    }
    // public function create(){
    //     return view('create');
    // }
    public function insert(){
        $post= new post();
        $post->title=request('title');
        $post->body=request('body');
        $post->save();
        return redirect('home');
    }

    public function destroy($id){
        $deleteData= post::find($id);
        $deleteData->delete();
        return redirect('home')->with('message','data deleted succefully');
    }

    // public function update(Request $request,$id){
    //     $article = post::find($id);
    //     $article->$title=$request->input('title');
    //     $article->body=$request->input('body');
    //     return view('update')->with('article'->$article);
    //     // $article->update();
    //     // return view('home', ['article'->$id]); 
    // }

   
}


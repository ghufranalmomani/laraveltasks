<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaraController extends Controller
{
    public function display(){
        $products= lara::all();
        return view('pages.index', compact('products'));
    }
    public function add(){
        return view('pages.addproduct');
    }

    public function insert(Request $request){
        $product= new lara();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->picture = $request->input('picture');
        $product->save();
        return redirect('index')->with("message","Product Added Succefully");
    }
    public function destroy($id){
        $delete= lara::find($id);
        $delete->delete();
        return redirect('index')->with('message',"product Deleted successfully");
    }
    public function edit($id){
        $edit= lara::find($id);
        return view('pages.updateproduct', compact('edit'));
    }
    public function update(Request $request,$id){
        $product= lara::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->picture = $request->input('picture');
        $product->update();
        return redirect('index')->with("message","Product Edited Succefully");
    }

}

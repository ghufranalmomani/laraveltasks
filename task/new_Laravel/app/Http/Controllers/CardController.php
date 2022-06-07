<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function display(){
        $products= card::all();
        return view('pages.index', compact('products'));
    }
    public function add(){
        return view('pages.addproduct');
    }

    public function insert(Request $request){
        $product= new cards();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->picture = $request->input('picture');
        $product->save();
        return redirect('index')->with("message","Product Added Succefully");
    }
    public function destroy($id){
        $delete= cards::find($id);
        $delete->delete();
        return redirect('index')->with('message',"product Deleted successfully");
    }
    public function edit($id){
        $edit= cards::find($id);
        return view('pages.updateproduct', compact('edit'));
    }
    public function update(Request $request,$id){
        $product= cards::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->picture = $request->input('picture');
        $product->update();
        return redirect('index')->with("message","Product Edited Succefully");
    }

}

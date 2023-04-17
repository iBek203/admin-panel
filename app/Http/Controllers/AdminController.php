<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("index");
    }

    public function admin(){
        return view("admin");
    }

    public function create(){
        return view("add-product");
    }

    public function product_check(Request $request){
        $valid = $request->validate([
            'name' => 'required|min:4|max|100',
            'description' => 'required|min:15|max:500',
            'price' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $valid['image'] = $request->file('image')->store('image', 'public');
        }

        return redirect('/')->with('message', 'Product created!');
    }
}

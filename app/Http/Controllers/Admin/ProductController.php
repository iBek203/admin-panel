<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();

        return view('admin.product.index', [
            'products' =>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.product.create', [
            'categories' =>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->img = $request->img;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->cat_id = $request->cat_id;
        $product->save();

        return redirect()->back()->withSuccess('Product added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.product.edit', [
            'categories' =>$categories,
            'product' =>$product

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->img = $request->img;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->cat_id = $request->cat_id;
        $product->save();

        return redirect()->back()->withSuccess('Product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

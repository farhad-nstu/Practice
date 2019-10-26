<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'      => 'required|max:200',
           'description'=> 'required',
           'buying_price'      => 'required|numeric',
           'selling_price'   => 'required|numeric',
           'category_id'      => 'required|numeric',
           
        ]);



        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $categories = Category::all();
        

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'name'      => 'required|max:200',
           'buying_price'      => 'numeric',
           'selling_price'   => 'numeric',
           'category_id'      => 'required|numeric',
           
        ]);



        $product = Product::find($id);
        

       
        $product->name = $request->name;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        $product->category_id = $request->category_id;
        

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back();
    }
}

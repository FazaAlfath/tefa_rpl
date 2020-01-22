<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduct');
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
            'name' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'sometimes|image|mimes:jpg,jpeg,svg,png|max:90000',
            'image' => 'sometimes|image|mimes:jpg,jpeg,svg,png|max:90000',
        ]);
        
        $icon = $request->file('icon');
        $image = $request->file('image');
        $nameIcon = uniqid().'.'.$icon->getClientOriginalExtension();
        $nameImage = uniqid().'.'.$image->getClientOriginalExtension();
        $path = public_path('/img/product/');
        $icon->move($path, $nameIcon);
        $image->move($path, $nameImage);
        Product::create([
            'name' => $request->name,
            'platform' => $request->platform,
            'description' => $request->description,
            'icon' => '/img/product/'.$nameIcon,
            'image' => '/img/product/'.$nameImage,
        ]);
        return redirect ('/home');
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
    public function edit(Product $product)
    {
        $model = \Auth::user()->role;
        if($model == '1'){
            return view ('editproduct', compact('product'));
        }else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {        
        $product->name = $request->name;
        $product->platform = $request->platform;
        $product->description = $request->description;
        if($request->hasFile('image1')) {
            File::delete(public_path($product->image1));
            $image = $request->file('image1');
            $filename = $image->getClientOriginalName();
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/img/product/');
            $image->move($path, $filename);
            $product->image1 = '/img/product/'.$filename;
        }
        $product->update();
        return redirect ('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
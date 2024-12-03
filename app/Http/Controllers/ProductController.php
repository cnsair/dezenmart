<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->orderBy('id', 'desc')->paginate(20);
        // return view('common.products', compact('products'));
        return view('common.products')->with('products', $products);
        // return view('common.test');

        // \Illuminate\Support\Facades\Log::info('Products: ' . $products);
        // tail -f storage/logs/laravel.log
    }

    /**
     * Display a listing of the resource.
     */
    public function test()
    {
        $products = Product::query()->orderBy('id', 'desc')->paginate(2);
        return view('admin.dashboard', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('common.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request ) { 

            $book = new Product();

            $book->user_id = Auth::user()->id;
            $book->category = $request->input('category');
            $book->name = $request->input('name');
            $book->price = $request->input('price');
            $book->rrp = $request->input('rrp');
            $book->description = $request->input('description');
            $book->image = $request->file('image')->store('product', 'public');

            $book->save();

            return Redirect::route('product.create')->with('status', 'success');
        }
        else{
            return Redirect::route('product.create')->with('status', 'failed');
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

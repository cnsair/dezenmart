<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->orderBy('id', 'desc')->paginate(20);
        // return view('common.products', compact('products'));
        return view('common.products')->with('products', $products);

        // \Illuminate\Support\Facades\Log::info('Products: ' . $products);
        // tail -f storage/logs/laravel.log
    }

    /**
     * Display a listing of the resource.
     */
    public function temporary()
    {
        $products = Product::query()->orderBy('id', 'desc')->paginate(10);
        
        if( Auth::user()->isAdmin() ){
            return view('admin.dashboard', compact('products'));
        }else{
            // return view('common.products', compact('products'));
            return Redirect::route('product.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Product::class);
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

            $product = new Product();

            $product->user_id = Auth::user()->id;
            $product->category = $request->input('category');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->rrp = $request->input('rrp');
            $product->description = $request->input('description');

            // Handle file upload
            if ($request->hasFile('image')) {
                $product->image = $request->file('image')->store('product', 'public');
            }

            $product->save();

            return Redirect::route('product.create')->with('status', 'success');
        }
        else{
            return Redirect::route('product.create')->with('status', 'failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        // $product = Product::findOrFail($product);
        // return view('common.show-product', compact('product'));

        $product = Product::with('user')->findOrFail($product); // Eager load user
        return view('common.show-product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        return view('common.edit-product', ['product' => $product]);
        // \Illuminate\Support\Facades\Log::info($product);
        // dd($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, $product)
    {
        $product = Product::findOrFail($product);
        $this->authorize('update', $product);

        $request->user()->fill($request->validated());

        if ( $request ) {
            // $product = Product::findorFail($product);

            $product->category = $request->input('category');
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->rrp = $request->input('rrp');
            $product->description = $request->input('description');
            
            // if ( $request->file('image') ) {
            //     Storage::disk('public')->delete($product->image); //delete old file
            //     $product->image = $request->file('image')->store('product', 'public'); //upload new file
            // }

            if (!empty($request->file('image'))) {
                // Check if a file exists before deleting
                if (!empty($product->image) && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image); // Delete old file
                }
            
                // Upload the new file
                $product->image = $request->file('image')->store('product', 'public');
            }

            $product->update();

            return Redirect::route('product.edit', ['product' => $product])->with('status', 'success');
        }
        else{
            return Redirect::route('product.edit', ['product' => $product])->with('status', 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $this->authorize('delete', $product);
        $product->delete();

        // Check if a file exists before deleting
        if (!empty($product->image) && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image); // Delete old file
        }

        return Redirect::route('product.index')->with('status', 'success');
    }
}

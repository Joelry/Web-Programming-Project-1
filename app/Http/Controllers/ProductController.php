<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = null;
        $message = null;

        return view('products_index', compact('product', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editMode = false;

        return view('products_edit', compact('editMode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO validation

        $image = $request->file('image');
        Storage::putFileAs('public', $image, $image->getClientOriginalName());
        $product = Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image->getClientOriginalName(),
        ]);

        $message = __('Successfully created :name.', ['name' => $product->name]);

        return view('products_index', compact('product', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $product = Product::find($request->id);

        return view('product_detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        $editMode = true;

        return view('products_edit', compact('product', 'editMode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // TODO validation

        $product = Product::find($request->id);

        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            Storage::putFileAs('public', $image, $image->getClientOriginalName());
            $product->image = $image->getClientOriginalName();
        }

        $product->save();

        $message = __('Successfully updated :name.', ['name' => $product->name]);

        return view('products_index', compact('product', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::where('id', $request->id)->delete();
        $message = __('Successfully deleted :name.', ['name' => $product->name]);

        return view('products_index', compact('product', 'message'));
    }
}

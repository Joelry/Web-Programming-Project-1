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

        return view('product_list', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        $product->stock = 1;
        $editMode = false;

        return view('product_edit', compact('product', 'editMode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        self::validate_product($request);

        $image = $request->file('image');
        Storage::putFileAs('public', $image, $image->getClientOriginalName());
        $product = Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $image->getClientOriginalName(),
        ]);

        Session::flash('message', __('Successfully created :name.', ['name' => $product->name]));

        return view('product_list', compact('product'));
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

        return view('product_edit', compact('product', 'editMode'));
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
        self::validate_product($request);

        $product = Product::find($request->id);

        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            Storage::putFileAs('public', $image, $image->getClientOriginalName());
            $product->image = $image->getClientOriginalName();
        }

        $product->save();

        Session::flash('message', __('Successfully updated :name.', ['name' => $product->name]));

        return view('product_list', compact('product'));
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
        Session::flash('message', __('Successfully deleted :name.', ['name' => $product->name]));

        return view('product_list', compact('product'));
    }

    private static function validate_product(Request $request)
    {
        $request->validate([
            'name' => 'required|min:20|max:70',
            'category' => 'required',
            'description' => 'required|max:2000',
            'price' => 'required|numeric|min:100.0|max:100000000.0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }
}

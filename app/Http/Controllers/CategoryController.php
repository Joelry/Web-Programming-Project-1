<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function products(Request $request)
    {
        $category = Category::find($request->id);
        $products = Product::where('category', $request->id)->get();

        return view('category_products', compact('category', 'products'));
    }
}

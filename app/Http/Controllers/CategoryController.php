<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function products(Request $request)
    {
        $category = Category::find($request->id);
        $products = $category->products_paginated;

        return view('category_products', compact('category', 'products'));
    }
}

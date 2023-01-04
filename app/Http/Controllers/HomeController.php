<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showDetail(Request $request)
    {
        $product = Product::find($request->route('id'));
        return view('detailProduct')->with('product', $product);
    }
}

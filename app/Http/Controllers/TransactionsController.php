<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function transactions()
    {
        return view('transactions');
    }
}

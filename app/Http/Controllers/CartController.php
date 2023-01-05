<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('cart');
    }

    public function add(Request $request)
    {
        $entriesRel = $request->user()->cartEntries();

        // Find existing entry with same product id
        $entry = $entriesRel->where('product_id', $request->product_id)->first();

        if ($entry) {
            // If entry exists, update quantity
            $entry->quantity += $request->quantity;
            $entry->save();
        } else {
            // If entry does not exist, create new entry
            $entriesRel->create([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        Session::flash('message', 'Item added to cart.');

        return view('cart');
    }

    public function remove(Request $request)
    {
        $request->user()->cartEntries()->where('product_id', $request->id)->delete();

        return redirect()->route('cart');
    }

    public function checkout(Request $request)
    {
        $cartRel = $request->user()->cartEntries();
        $cart = $cartRel->get();
        $total = 0;

        DB::beginTransaction();
        try {
            // Update products' stock
            foreach ($cart as $cartEntry) {
                $product = $cartEntry->product;
                $product->stock -= $cartEntry->quantity;
                if ($product->stock < 0) {
                    DB::rollBack();
                    Session::flash('error_message', 'Not enough stock for product ' . $product->name);
                    return redirect()->back();
                }
                $product->save();
                $total += $cartEntry->quantity * $product->price;
            }

            // Create transaction header
            $transaction = $request->user()->transactions()->create([
                'total' => $total,
                'status' => 'paid',
            ]);

            // Create transaction entries
            foreach ($cart as $cartEntry) {
                $product = $cartEntry->product;
                $transaction->entries()->create([
                    'product_id' => $cartEntry->product_id,
                    'quantity' => $cartEntry->quantity,
                    'price' => $product->price,
                    'subtotal' => $cartEntry->quantity * $product->price,
                ]);
            }

            $cartRel->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        Session::flash('message', 'Order placed successfully.');

        return view('transactions');
    }
}

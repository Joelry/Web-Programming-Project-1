@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <h2 class="flex-grow-1">Cart</h2>
        </div>
        @include('alerts')
        @php
            $entries = Auth::user()->cartEntries()->get();
            $numItems = 0
        @endphp
        <div class="row">
            <div class="col">
                @foreach($entries as $entry)
                    @php
                        $numItems += $entry->quantity
                    @endphp
                    @include('cart_entry', ['entry' => $entry, 'product' => $entry->product])
                @endforeach
            </div>
            <div class="col-lg-3">
                <form action="/cart/checkout" method="post" class="d-flex flex-column">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="quantity">Total ({{ number_format($numItems) }} @choice('item|items', $numItems)
                            )</label>
                        @php
                            $total = 0;
                            foreach ($entries as $entry) {
                                $total += $entry->quantity * $entry->product->price;
                            }
                        @endphp
                        <div class="product-subtotal" id="subtotal">Rp {{ number_format($total) }}</div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 flex-grow-1" @if($numItems == 0) disabled @endif>
                        <span class="fa fa-shopping-cart"></span> Checkout
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
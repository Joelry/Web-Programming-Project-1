@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <h2 class="flex-grow-1">Transactions</h2>
        </div>
        @include('alerts')
        <div class="row">
            <div class="col">
                @foreach(Auth::user()->transactions()->orderBy('created_at', 'desc')->get() as $transaction)
                    <div class="card mb-2">
                        <div class="card-header">
                            #{{ $transaction->id }} -
                            <small>{{ \Carbon\Carbon::parse($transaction->created_at)->format('d M Y H:i e') }}</small>
                        </div>
                        <div class="card-body">
                            @php
                                $numItems = 0;
                            @endphp
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transaction->entries()->get() as $entry)
                                    @php
                                        $product = $entry->product;
                                        $numItems += $entry->quantity;
                                    @endphp
                                    <tr>
                                        <td>
                                            <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ number_format($entry->quantity) }}</td>
                                        <td>Rp {{ number_format($entry->quantity * $product->price) }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td><b>Total</b></td>
                                    <td><b>{{ number_format($numItems) }} @choice('item|items', $numItems)</b></td>
                                    <td><b>Rp {{ number_format($transaction->total) }}</b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
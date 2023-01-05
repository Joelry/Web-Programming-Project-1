@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <img src="{{ url('storage/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
        </div>
        <div class="col">
            <h3>{{ $product->name }}</h3>
            <div class="product-price">Rp {{ number_format($product->price) }}</div>
            <div class="product-description">{{ $product->description }}</div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex flex-column">
                @guest
                    <div class="text-danger">Please <a href="/login">log in</a> to buy products.</div>
                @elseif(Auth::user()->role == 'member')
                    @if($product->stock != 0)
                        <div>Stock: {{ number_format($product->stock) }}</div>

                        <!-- Add to Cart -->
                        <form action="/cart" method="post" class="d-flex flex-column">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group mt-2">
                                <label for="quantity">Purchase Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" value="1"
                                       min="1"
                                       max="{{ $product->getMaxPurchaseQuantity(Auth::user()) }}"
                                       onchange="document.getElementById('subtotal').innerHTML = 'Rp ' + (this.value * {{ $product->price }}).toLocaleString()">
                            </div>
                            <div class="form-group mt-2">
                                <label for="quantity">Subtotal</label>
                                <div class="product-subtotal" id="subtotal">
                                    Rp {{ number_format($product->price) }}</div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 flex-grow-1"><span
                                        class="fa fa-cart-plus"></span> Add to Cart
                            </button>
                        </form>
                    @else
                        <div class="text-danger">Out of stock</div>
                    @endif
                @elseif(Auth::user()->role == 'admin')
                    <!-- Edit Product -->
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-secondary mt-2 flex-grow-1">
                        <span class="fa fa-pencil"></span> Edit Product
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

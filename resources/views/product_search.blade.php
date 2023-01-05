@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/products/search" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" label="search" name="q" value="{{ $query }}" required>
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <h2>Results for {{ $query }}</h2>
    <div class="product-deck-v">
        @foreach($products as $product)
            @include('product_entry')
        @endforeach
    </div>
    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>
</div>
@endsection

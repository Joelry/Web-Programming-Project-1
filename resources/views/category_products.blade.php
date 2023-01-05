@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $category->name }}</h2>
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

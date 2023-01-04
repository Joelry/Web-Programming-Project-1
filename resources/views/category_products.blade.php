@extends('layouts.app')

@section('content')
<div class="container">
    <div class="input-group mb-3">
        <input type="text" class="form-control" label="search">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Search</button>
        </div>
    </div>
</div>

<div class="container">
    <h2>{{ $category->name }}</h2>
    <div class="card-deck mt-3 ml-1 mr-1 mb-3" style="overflow-x: auto">
        @foreach(\App\Models\Product::where('category', $category->slug)->get() as $product)
            @include('product')
        @endforeach
    </div>
</div>
@endsection

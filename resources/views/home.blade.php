@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/products/search" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" label="search" name="q" required>
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    @foreach(\App\Models\Category::all() as $category)
        <div class="card mb-4">
            <div class="card-header">{{ $category->name }} <a class="btn btn-link"
                                                              href="/category/{{ $category->slug }}">{{ __('View All') }}</a></div>

            <div class="product-deck">
                @foreach($category->products()->limit(10)->get() as $product)
                    @include('product_entry')
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection

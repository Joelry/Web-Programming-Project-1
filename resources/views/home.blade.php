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
    @foreach(\App\Models\Category::all() as $category)
        <div class="card mb-4">
            <div class="card-header">{{ $category->name }} <a class="btn btn-link"
                                                              href="/category/{{ $category->slug }}">{{ __('View All') }}</a></div>

            <div class="card-deck mt-3 ml-1 mr-1 mb-3" style="overflow-x: auto">
                @foreach($category->products()->get() as $product)
                    @include('product_entry')
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection

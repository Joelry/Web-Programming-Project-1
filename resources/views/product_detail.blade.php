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
    <h3>{{ $product->name }}</h3>
</div>
@endsection

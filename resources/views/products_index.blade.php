@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" label="search">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">Search</button>
            </div>
        </div>
    </div>
    @if(!is_null($message))
        <div class="alert alert-dismissible alert-success">
            {{ $message }}
        </div>
    @endif
    <div class="column">
        @foreach(\App\Models\Product::all() as $product)
            <div class="card mb-2 d-flex flex-row">
                <img class="card-img-left" src="{{$product->image}}" alt="{{$product->name}}"
                     style="width: 150px; height: 150px">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="flex-grow-1">
                            <h5 class="card-title">{{$product->name}}</h5>
                        </div>
                        <div>
                            <a class="btn btn-outline-secondary mr-1" href="/products/edit/{{$product->id}}"><span class="fa fa-pencil"></span></a>
                            <a class="btn btn-outline-danger" href="/products/delete/{{$product->id}}"><span class="fa fa-trash"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
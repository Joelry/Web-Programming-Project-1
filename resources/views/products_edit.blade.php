@extends('layouts.app')

@section('content')
<div class="w-50 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Edit Product</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data"
                            @if($editMode)
                                action="{{ route('products.update', $product->id) }}"
                            @else
                                action="{{ route('products.store') }}"
                            @endif>
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>

                            <div>
                                <input id="name" name="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name', $product->name) }}" required autocomplete="off" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category">{{ __('Category') }}</label>
                            <div>
                                <select class="form-control" id="category" name="category">
                                    @foreach(\App\Models\Category::all() as $category)
                                        <option value="{{ $category->slug }}"
                                                @if(old('category', $product->category) == $category->slug)
                                                    selected
                                                @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>

                            <div>
                                <textarea id="description" name="description" type="text" rows="10"
                                          class="form-control @error('description') is-invalid @enderror"
                                          required>{{ old('description', $product->description) }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">{{ __('Price') }}</label>

                            <div>
                                <input id="price" name="price" type="number"
                                       class="form-control @error('price') is-invalid @enderror"
                                       value="{{ old('price', $product->price) }}" required autocomplete="off">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stock">{{ __('Stock') }}</label>

                            <div>
                                <input id="stock" name="stock" type="number"
                                       class="form-control @error('stock') is-invalid @enderror"
                                       value="{{ old('stock', $product->stock) }}" required autocomplete="off">

                                @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>

                            <div>
                                <input id="image" name="image" type="file"
                                       class="form-control @error('image') is-invalid @enderror"
                                       value="{{ old('image', $product->image) }}" @if(!$editMode) required @endif>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

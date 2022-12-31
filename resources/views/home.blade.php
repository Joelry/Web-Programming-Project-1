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
            <div class="card">
                <div class="card-header">{{ __('Beauty') }} <a class="btn btn-link" href="{{ route('register') }}">{{ __('View All') }}</a></div>

                <div class="card-body">
                </div>
            </div>
</div>

<br>

<div class="container">
            <div class="card">
                <div class="card-header">{{ __('Camera') }} <a class="btn btn-link" href="{{ route('register') }}">{{ __('View All') }}</a></div>

                <div class="card-body">
                </div>
            </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="w-50 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Profile') }}</div>
                <div class="card-body">
                <form>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="Gender">Gender</label>
    <input type="Gender" class="form-control" id="Gender">
  </div>

  <div class="form-group">
    <label for="date">Date Of Birth</label>
    <input type="date" class="form-control" id="date">
  </div>

  <div class="form-group">
    <label for="updateName">Country</label>
    <input type="updateName" class="form-control" id="updateName">
  </div>
</form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
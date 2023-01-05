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
                            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" name="gender" class="form-control" id="gender" value="{{ $user->gender }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="birthdate">Date of Birth</label>
                            <input type="text" name="birthdate" class="form-control" id="birthdate" value="{{ $user->birthdate }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" id="country" value="{{ $user->country }}" readonly>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
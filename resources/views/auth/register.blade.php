@extends('layouts.app')

@section('content')
<div class="w-50 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       value="{{ old('password') }}" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password_confirmation" value="{{ old('password_confirmation') }}" required
                                       autocomplete="new-password">
                            </div>

                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="Gender"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline flex-grow-1">
                                        <input class="form-check-input" type="radio" name="gender" value="male"
                                               id="gender-1">
                                        <label class="form-check-label" for="gender-1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline flex-grow-1">
                                        <input class="form-check-input" type="radio" name="gender" value="female"
                                               id="gender-2">
                                        <label class="form-check-label" for="gender-2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline flex-grow-1">
                                        <input class="form-check-input" type="radio" name="gender" value="other"
                                               id="gender-3">
                                        <label class="form-check-label" for="gender-3">Other</label>
                                    </div>
                                </div>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="datepicker">Date of Birth</label>
                            <div class="col-md-6">
                                <input id="datepicker" name="birthdate" class="@error('password') is-invalid @enderror"
                                       value="{{ old('birthdate') }}"/>
                                <script>
									$('#datepicker').datepicker({
										uiLibrary: 'bootstrap4'
									});
                                </script>

                                @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="country">Country</label>
                            <div class="col-md-6">
                                <select class="form-control @error('country') is-invalid @enderror" id="country" name="country">
                                    <option value="" selected disabled>Select country</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="US">United States</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="JP">Japan</option>
                                    <option value="QA">Qatar</option>
                                </select>

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Role"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline flex-grow-1">
                                        <input class="form-check-input" type="radio" name="role" value="member"
                                               id="role-1">
                                        <label class="form-check-label" for="role-1">Member</label>
                                    </div>
                                    <div class="form-check form-check-inline flex-grow-1">
                                        <input class="form-check-input" type="radio" name="role" value="admin"
                                               id="role-2">
                                        <label class="form-check-label" for="role-2">Admin</label>
                                    </div>
                                </div>

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-8 text-md-right ">
                                {{ __('Have an account?') }}<a class="btn btn-link" href="{{ route('login') }}">{{ __('Login Here') }}</a>
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

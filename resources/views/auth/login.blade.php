@extends('layouts.auth')

@section('content')
<div class="row w-100">
    <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="username">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-info submit-btn btn-block" type="submit">{{ __('Login') }}</button>
                </div>
            </form>
        </div>
        <p class="footer-text text-center">copyright © 2018 Evalogical. All rights reserved.</p>
    </div>
</div>
@endsection

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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Enter your Username">
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Enter your Password">
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

                <div class="form-group d-flex justify-content-between">
                    <div class="form-check-flat mt-0">
                        <a href="{{url('register')}}" class="text-black text-small">Create New Account</a>
                    </div>
                    <a href="{{url('password/reset')}}" class="text-small forgot-password text-black">Forgot Password?</a>
                </div>
            </form>
        </div>
        <p class="footer-text text-center">Copyright &copy; 2019 PSTN Service. All rights reserved.</p>
    </div>
</div>
@endsection

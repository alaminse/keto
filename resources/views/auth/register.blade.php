@extends('auth.app')

@section('content')

<div class="login-main">
    <form method="POST" action="{{ route('register') }}">
        @csrf
      <h4>{{ __('Login') }} to account</h4>
      <p>Enter your email & password to login</p>
      <div class="form-group">

        <label for="name" class="col-form-label">{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
       </div>
       <div class="form-group">
        <label class="col-form-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="form-group">
        <label class="col-form-label">{{ __('Password') }}</label>
        <div class="form-input position-relative">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          <div class="show-hide"><span class="show">                         </span></div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      <div class="form-group">
        <label class="col-form-label">{{ __('Confirm Password') }}</label>
        <div class="form-input position-relative">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <div class="show-hide"><span class="show">                         </span></div>
        </div>
      </div>
      <div class="form-group mb-0">
        <div class="text-end mt-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
      </div>
      <p class="mt-4 mb-0 text-center">I have<a class="ms-2" href="{{ route('login') }}">Account</a></p>
    </form>
</div>
@endsection

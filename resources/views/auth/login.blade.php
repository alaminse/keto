@extends('auth.app')

@section('content')

<div class="login-main">
    <form method="POST" action="{{ route('login') }}">
    @csrf
      <h4>{{ __('Login') }} to account</h4>
      <p>Enter your email & password to login</p>
      <div class="form-group">
        <label class="col-form-label">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label class="col-form-label">{{ __('Password') }}</label>
        <div class="form-input position-relative">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <div class="show-hide"><span class="show">                         </span></div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      <div class="form-group mb-0">
        <div class="checkbox p-0">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="text-muted" for="remember">{{ __('Remember Me') }}</label>
        </div>
        @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
        @endif
        <div class="text-end mt-3">
            <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>

        </div>
      </div>
      <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('register') }}">Create Account</a></p>
    </form>
</div>
@endsection




@extends('layout')

@section('content')
<section id="signin" class="signin">
    <div class="container cont">
        <h1 class="sign__title">Authorization</h1>
        <div class="signin__first-row">
          <form method="POST" class="signin-tabs__wrap" action="{{ route('login') }}">
              @csrf
            <div class="tabs__input-group">
                <div class="tabs-input__wrap">
                    <i class="fa fa-envelope"></i>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email*">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                 <div class="tabs-input__wrap">
                    <i class="fa fa-key"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password*">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label class="control control-checkbox">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="control_indicator"></span>
                    <span class="control_name">Remember me</span>
                </label>
                <div class="tabs__button">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Password recovering</a>
                    @endif

                    <button type="submit" class="button-continue arrow">
                        Sign in
                    </button>
                </div>
            </div>  
          </form>
        </div>
    </div>
</section>
@endsection

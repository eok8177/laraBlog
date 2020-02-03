@extends('layout')

@section('content')
<section id="signin" class="signin">
    <div class="container cont">
        <h1 class="sign__title">{{ __('Reset Password') }}</h1>
        <div class="signin__first-row">
          <form method="POST" class="signin-tabs__wrap" action="{{ route('password.email') }}">
              @csrf
            <div class="tabs__input-group">
                <div class="tabs-input__wrap">
                    <i class="fa fa-envelope"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email*">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="tabs__button">
                    <button type="submit" class="button-continue arrow">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>  
          </form>
        </div>
    </div>
</section>
@endsection

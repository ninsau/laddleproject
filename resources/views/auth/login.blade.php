@extends('layouts.app')
@section('title')
Login | Laddle
@endsection
@section('content')
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ __('Login to your laddle dashboard') }}
            @endslot

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <div class="control">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <hr>

                <div class="field is-form-action-buttons">
                  <div class="control">
                      <button type="submit" class="button is-primary">
                          {{ __('Login') }}
                      </button>
                      <a class="button is-text" href="{{ route('register') }}">
                          {{ __('Register') }}
                      </a>
                      @if (Route::has('password.request'))
                              <a class="button is-text" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                      @endif
                  </div>



                </div>
            </form>
        @endcomponent
    @endcomponent
@endsection

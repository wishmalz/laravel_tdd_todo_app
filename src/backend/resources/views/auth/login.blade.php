@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-6">
        <div class="card">
            <div class="text-2xl font-bold text-center">{{ __('Login') }}</div>

            <div class="flex mt-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control shadow w-full @error('email') is-invalid
@enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="your_email@example.com">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control shadow w-full @error('password') is-invalid @enderror"
                                   name="password"
                                   required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center mt-8">
                        <input class="" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="ml-2" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="flex items-center mt-3">
                        <button type="submit" class="button">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="ml-4" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

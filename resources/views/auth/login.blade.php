@extends('layouts.default')

@section('page_title', 'Login')

@push('header_scripts')

@endpush

@push('styles')

@endpush

@section('content')
    <section class="hero is-bold is-light is-small">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">
                    Login
                </h1>
                <h2 class="subtitle">
                    Welcome back! Please sign in to create new content for your fellows.
                </h2>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="box">
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">E-Mail Address</label>
                        <p class="control">
                            <input class="input" id="email" type="email" name="email"
                                   value="{{ old('email') }}" required autofocus>
                        </p>

                        @if ($errors->has('email'))
                            <p class="help is-danger">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>

                    <div class="field ">
                        <label class="label">Password</label>
                        <p class="control">
                            <input class="input" id="password" type="password" name="password" required>
                        </p>

                        @if ($errors->has('password'))
                            <p class="help is-danger">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>

                    <div class="field">
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <label class="checkbox">
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="field-body">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Login</button>
                                </div>

                                <div class="control">
                                    <a class="button" href="/auth/social/github">
                                        <span class="icon">
                                          <i class="fa fa-github"></i>
                                        </span>
                                        <span>Login with GitHub</span>
                                    </a>
                                </div>

                                <div class="control">
                                    <a href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
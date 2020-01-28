@extends('layouts._template')
@section('indexPage')

    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-padlock-1 icon-white"></i>
                        </div>
                        <h1>Welcome back to your account</h1>
                        <p>We're happy to have you back.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Login Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 st-tabs">
                    <!-- Nav tabs -->
                    <div class="well-box">
                        <h3>Vendor Login</h3>
                         <form method="POST" action="{{ route('vendorLogin') }}">
                        @csrf
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Password<span class="required">*</span></label>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group row">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                                        <small>{{ __('Forgot Your Password?') }}</small>
                                    </a>
                                @endif
                            </div>

                        </form>
                    </div>
                    <div class="well-box social-login"> <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn twitter-btn"><i class="fa fa-twitter-square"></i>Twitter</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>
                </div>
                <div class="col-md-6 st-tabs">
                    <!-- Nav tabs -->
                    <div class="well-box">
                        <h3>Couple Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">{{ __('E-mail') }}<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="input-md form-control @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">{{ __('Password') }}<span class="required">*</span></label>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror text-danger input-md" required>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                                        <small>{{ __('Forgot Your Password?') }}</small>
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="well-box social-login"> <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn twitter-btn"><i class="fa fa-twitter-square"></i>Twitter</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>
                </div>
            </div>
        </div>
    </div>

@endsection
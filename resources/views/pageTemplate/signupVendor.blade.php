@extends('layouts._template')
@section('indexPage')
   
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-curtains icon-white"></i>
                        </div>
                        <h1>Are you Supplier - Start Business</h1>
                        <p>Wedding Vendor works with thousands of wedding vendors worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Sing Up Vendor</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="well-box">
                         <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2>Vendor Registration</h2>
                            <!-- Text input-->
                            <input id="name" type="hidden"  name="type" value=2 required  autofocus>
                            <div class="form-group">
                                <label class="control-label" for="name">User Name<span class="required">*</span></label>
                                <input id="name" name="name" type="text" placeholder="User name"  class="form-control @error('name') is-invalid @enderror input-md" required>
                                 @error('name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror input-md" required>
                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="wedding" value="">
                            <div class="form-group">
                                <label class="control-label" for="email">password<span class="required">*</span></label>
                                <input id="password" name="password" type="password"class="form-control @error('password') is-invalid @enderror input-md" required>
                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Confirm Password<span class="required">*</span></label>
                                <input  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            

                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button name="submit" class="btn btn-primary btn-lg">create an account</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-block feature-left">
                                <div class="well-box">
                                    <div class="feature-icon"><i class="icon-love-letter icon-size-60 icon-default"></i></div>
                                    <div class="feature-content">
                                        <h3>Questions ? Contact us </h3>
                                        <p>Can't get any answer am poenatis condimentum. Fusce risus odiamrper at, lacinia vel leo.</p>
                                        <a href="#" class="btn btn-default btn-sm">Help Center</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="feature-block feature-left">
                                <div class="well-box">
                                    <div class="feature-icon"><i class="icon-list-3 icon-size-60 icon-default"></i></div>
                                    <div class="feature-content">
                                        <h3>Wedding Pricing</h3>
                                        <p>View our pricing table enenatis conntum. Fusce risus odio, egestas sit amet usllamcornia vel leo.</p>
                                        <a href="#" class="btn btn-default btn-sm">View Pricing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
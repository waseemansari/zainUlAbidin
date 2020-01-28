@extends('layouts._template')
@section('indexPage')
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-lock icon-white"></i>
                        </div>
                        <h1>Create a FREE account &amp; save you date.</h1>
                        <p>Start Planning It's Free t amet justo venenatis vesti cus arcuoin auctor sodales interdum.</p>
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
                        <li class="active">Sign Up Couple</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 singup-couple">
                    <div class="well-box">
                        <h2>Let's turn your wedding into a reality!</h2>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <!-- Text input-->
                            <div class="form-group">
                                 <input id="name" type="hidden"  name="type" value=1 required  autofocus>
                                <label class="control-label" for="name">Your Name<span class="required">*</span></label>
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control @error('name') is-invalid @enderror input-md" name="name" value="{{ old('name') }} " required>
                                @error('name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror input-md" required value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">Password<span class="required">*</span></label>
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror input-md" required>
                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">Password<span class="required">*</span></label>
                                <input id="password" name="password_confirmation" type="password" class="form-control input-md" required>
                                
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="control-label" for="phone">Wedding Date<span class="required">*</span></label>
                                <input type="date" placeholder="Wedding Date" id="datepicker" class="form-control" required name="wedding">
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary">Create An Account</button>
                            </div>
                        </form>
                    </div>
                    <p>Already a Member? <a href="{{route('login')}}">Log In</a></p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"> <i class="icon-list-2 icon-size-60 icon-default"></i> </div>
                                <div class="feature-content">
                                    <h3>Wedding Checklist</h3>
                                    <p>Nullam porttitor lorem atdiam quis semper diam orci at neque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-budget icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Wedding Budget</h3>
                                    <p>Donec convallis libero et risus maximus cgestas sem venenatis vel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-wedding-arch icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Wedding Vendors</h3>
                                    <p>Aliquam erat volutpat. Quisque ullamcorper quis ipsum eget consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 feature-block">
                            <div class="well-box">
                                <div class="feature-icon"><i class="icon-two-hearts icon-size-60 icon-default"></i></div>
                                <div class="feature-content">
                                    <h3>Everything you need</h3>
                                    <p>Fusce dapibus ex ac justo facili libero et risus maximus convallis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
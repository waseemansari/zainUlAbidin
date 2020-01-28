@extends('layouts._template')
@section('indexPage')
   
     @include('vendor.vendorNavbar')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="page-header">
                            <h1>Vendor Profile <small>Edit and Update your profile.</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-dashboard">
                    <div class="row">
                        <div class="col-md-7 dashboard-form">
                            <div class="bg-white pinside40 mb30">
                                @if(session()->has('successMessageProfile'))
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> {{session()->get('successMessageProfile') }}.
                                                  </div>
                                @endif
                                @if(session()->has('errorMessageProfile'))
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> {{session()->get('errorMessageProfile') }}.
                                                  </div>
                                @endif
                                @if(auth::user()->images=='')
                                            <img src="{{asset('images/user.png')}}" height="150" width="150" class="img-circle" style="margin-bottom:12px;">
                                            @else
                                            @php $image  = auth::user()->images; @endphp
                                            <img width="150" height="150" class="img-circle" src="{{ asset('storage/' . $image) }}" alt="">
                                            @endif
                                
                                
                                <form class="form-horizontal" action="{{route('vendor.changeAvatar')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" row">
                                        
                                        <div class="col-md-4">
                                            
                                            <input id="image" name="image" class="form-control @error('image') is-invalid @enderror input-file" type="file" required="required">
                                            @error('image')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                        </div>
                                        <div class="col-md-8 upload-file">
                                            
                                        </div>
                                       
                                        
                                        <div class="col-md-12">
                                            <button id="submit" name="submit" class="btn btn-primary ">Change Profile Picture</button>
                                        </div>
                                  <h2 class="form-title" style="color: white">Vendor Profile </h2>
                                    
                                    </div>
                                    <!-- Text input-->
                                    

                                </form>
                                <!--/////////////////////////end picture //////---->
                                 @if(session()->has('successInfoMessage'))
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> {{session()->get('successInfoMessage') }}.
                                                  </div>
                                @endif
                                @if(session()->has('errorInfoMessage'))
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> {{session()->get('errorInfoMessage') }}.
                                                  </div>
                                @endif
                                <form class="form-horizontal" action="{{route('vendor.changeInfo')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Vendor Name<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Vendor Name"  class="form-control @error('name') is-invalid @enderror input-md" required=""  value="{{auth::user()->name}}">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Vendor Website </label>
                                        <div class="col-md-8">
                                            <input id="name" name="website" type="text" placeholder="Vendor Website" class="form-control @error('website') is-invalid @enderror input-md" value="{{auth::user()->website}}">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Email<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror input-md" required="" readonly="" value="{{auth::user()->email}}">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Phone<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="phone" type="text" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror input-md" required="" value="{{auth::user()->phone}}">
                                        </div>
                                        @error('phone')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="description">Description</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="description" name="Description" rows="6" cols="12">{{auth::user()->desc}}</textarea>
                                        </div>
                                    </div>
                                    <h2 class="form-title">Socail Media Profile</h2>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Facebook URl</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Facebook" type="text" placeholder="Facebook URl" class="form-control input-md" value="{{auth::user()->facebookURl}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Twitter Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Twitter" type="text" placeholder="Twitter Url" class="form-control input-md" value="{{auth::user()->twitterUrl}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Linkedin Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Linkedin" type="text" placeholder="Linkedin Url" class="form-control input-md" value="{{auth::user()->linkedinUrl}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Pinterest Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="Pinterest" type="text" placeholder="Pinterest Url" class="form-control input-md" value="{{auth::user()->pinterestUrl}}">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 dashboard-form">
                            <div class="bg-white pinside40 mb30">

                                @if(session()->has('successMessage'))
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> {{session()->get('successMessage') }}.
                                                  </div>
                                @endif
                                @if(session()->has('errorMessage'))
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> {{session()->get('errorMessage') }}.
                                                  </div>
                                @endif
                                <form class="form-horizontal" action="{{route('vendor.changePassword')}}" method="POST">
                                    @csrf
                                    <!-- Form Name -->
                                    <h2 class="form-title">Change Password</h2>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="oldpassword">Old Password</label>
                                        <div class="col-md-8">
                                            <input id="oldpassword" name="oldpassword" type="password" placeholder="Old Password" class="form-control @error('oldpassword') is-invalid @enderror input-md" required="">
                                            @error('oldpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="newpassword">New Password</label>
                                        <div class="col-md-8">
                                            <input id="newpassword" name="newpassword" type="password" placeholder="New Password" class="form-control @error('newpassword') is-invalid @enderror input-md" required="">
                                        </div>
                                        @error('newpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input id="ConfirmPassword" name="ConfirmPassword" type="password" placeholder="Confirm Password" class="form-control @error('ConfirmPassword') is-invalid @enderror input-md" required="">
                                            @error('ConfirmPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
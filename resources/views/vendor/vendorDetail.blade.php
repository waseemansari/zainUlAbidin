@extends('layouts._template')
@section('indexPage')
    <div id="slider" class="owl-carousel owl-theme slider">
        @if(count($listModel->imageListMany) > 0)
            @foreach($listModel->imageListMany as $image)
            <div class="item">
            <div class="slider-pic"><img src="{{ asset('storage/' . $image->image) }}" alt="Mirror Edge"></div>
        </div>
            @endforeach
        @endif    
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Venue Listing</a></li>
                        <li class="active">Wedding Venue Title Goes Here</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container venue-header">
        <div class="row venue-head">
            <div class="col-md-12 title"> 
                <h1>{{$listModel->heading}}</h1>
                <p class="location"><i class="fa fa-map-marker"></i>{{$listModel->address}}</p>
            </div>
            <div class="col-md-8 rating-box">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
            </div>
            <div class="col-md-4 venue-action"> <a href="#googleMap" class="btn btn-primary">VIEW MAP</a> <a href="#inquiry" class="btn btn-default">Book Venue</a> </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-description">
                    <div class="venue-details">
                        <h2>Venue Details</h2>
                        <p>{{$listModel->description}}</p>
                        
                        
                    </div>
                    <!-- comments -->
                    <div class="customer-review">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Couples Review</h1>
                                <div class="review-list">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <div class="user-pic"> <img class="img-responsive img-circle" src="{{asset('images/user.png')}}" alt=""> </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <div class="text-left">
                                                        <h3>The whole experience was Excellent</h3>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                    </div>
                                                    <div class="review-post">
                                                        <p> From initially being shown round through booking to breakfast the next morning. Nam eu enim mollis urna egestas interdum eget quis nisl. Ut sem velit, scelerisque nec commodo consequat, imperdiet non diam. </p>
                                                    </div>
                                                    <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <!--comment -->
                                <div class="row">
                                    <div class="col-md-12">
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
                                        <form method="post" action="{{route('addRating',$listModel->id)}}">
                                        @csrf
                                <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label  text-md-right">{{ __('Heading') }}</label>

                                    <div class="col-md-12">
                                        
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                  </div>
                                  <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label  text-md-right">{{ __('Rating') }}</label>

                                    <div class="col-md-12">
                                       <select class="form-control" name="rating">
                                           <option value="">Select Star </option>
                                           <option value="1">1 Star</option>
                                           <option value="2">2 Star</option>
                                           <option value="3">3 Star</option>
                                           <option value="4">4 Star</option>
                                           <option value="5">5 Star</option>
                                       </select>
                                        @error('rating')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                  </div>
                                   <div class="form-group row">
                                <label for="name" class="col-md-12 col-form-label  text-md-right">{{ __('Description') }}</label>

                                    <div class="col-md-12">
                                       <textarea class="form-control" rows="5" name="description">{{old('description')}}</textarea>
                                        

                                        @error('description')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                  </div>
                                    <div class="review">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"  aria-expanded="false" aria-controls="review"> Write A Review </button>
                                    </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end comment -->
                                
                              
                                <div class="collapse review-list review-form" id="review">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h1>Write Your Review</h1>
                                            <form class="">
                                                <div class="rating-group">
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio1" value="option2">
                                                        <label for="radio1" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio2" value="option3">
                                                        <label for="radio2" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio3" value="option3">
                                                        <label for="radio3" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio4" value="option4">
                                                        <label for="radio4" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="radio1" id="radio5" value="option5">
                                                        <label for="radio5" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <div class="">
                                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label" for="email">E-Mail</label>
                                                    <div class=" ">
                                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class=" control-label" for="reviewtitle">Review Title</label>
                                                    <div class=" ">
                                                        <input id="reviewtitle" name="reviewtitle" type="text" placeholder="Review Title" class="form-control input-md" required>
                                                    </div>
                                                </div>
                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class=" control-label">Write Review</label>
                                                    <div class="">
                                                        <textarea class="form-control" rows="8">Write Review</textarea>
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <button name="submit" class="btn btn-primary btn-lg">Submit Review</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.comments -->
                </div>
                <div class="col-md-4 page-sidebar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="venue-info">
                                <!-- venue-info-->
                                <div class="capacity">
                                    <div>Capacity:</div>
                                    <span class="cap-people">                       {{$listModel->Seat ? $listModel->Seat->title : ''}} 
                                     </span>
                                     </div>
                                    <div class="pricebox">
                                    <div>Avg price:</div>
                                    <span class="price">{{$listModel->price ? $listModel->price->title: ''}} {{$listModel->price ? $listModel->price->sign : ''}}</span>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="well-box" id="inquiry">
                                <h2>Send Enquiry to Vendor</h2>
                                <p>Fill in your details and a Venue Specialist will get back to you shortly.</p>
                                @if(session()->has('message'))
                                 <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                       {{session()->get('message') }}.
                                </div>
                                @endif
                                <form class="" method="post" action="{{route('sendQuery', $listModel->id)}}">
                                    @csrf
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="name-one" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                        </div>
                                        @error('name')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="phone">Phone:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                            <span class="help-block"> </span> </div>
                                            @error('phone')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="email-one">E-Mail:<span class="required">*</span></label>
                                        <div class="">
                                            <input id="email-one" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                        </div>
                                        @error('email')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="default-calender">
                                        <div class="form-group">
                                            <label class="control-label" for="weddingdate">Wedding Date<span class="required">*</span></label>
                                            <div class="">
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="weddingDate" id="weddingdate" placeholder="Wedding Date">
                                                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar"></i></span> </div>
                                            </div>
                                        </div>
                                         @error('weddingDate')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="guest">Number of Guests:<span class="required">*</span></label>
                                        <div class="">
                                            <select id="guest" name="guestNumber_id" class="form-control">
                                                <option value="35 to 50">35 to 50</option>
                                                <option value="50  to 65">50 to 65</option>
                                                <option value="65 to 85">65 to 85</option>
                                                <option value="85 to 105">85 to 105</option>
                                                 <option value="100 to 200">100 to 200</option>
                                                 <option value="200 to 300">200 to 300</option>
                                            </select>
                                        </div>
                                        @error('guestNumber_id')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Multiple Radios -->
                                    <div class="form-group">
                                        <label class="control-label">Send me info via</label>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="sendQueryVia" id="checkbox-0" value="1" class="styled">
                                            <label for="checkbox-0" class="control-label"> E-Mail </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="sendQueryVia" id="checkbox-1" value="2" class="styled">
                                            <label for="checkbox-1" class="control-label"> Need Call back </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button name="submit" class="btn btn-default btn-lg btn-block">Book MY Venue now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="profile-sidebar well-box">
                                <!-- SIDEBAR USERPIC -->

                                <div class="profile-userpic">
                                    @if($listModel->User ? $listModel->User->images=='' : '')
                                    <img src="{{asset('images/user.png')}}" class="img-responsive img-circle" alt="">
                                           
                                            @else
                                            @php $image  = $listModel->User->images; @endphp
                                            <img width="150" height="150" class="img-circle" src="{{ asset('storage/' . $image) }}" alt="">
                                            @endif
                                 
                                  </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">
                                        <h2>{{$listModel->User ? $listModel->User->name:''}}</h2>
                                    </div>
                                    <div class="profile-address"> <i class="fa fa-map-marker"></i> {{$listModel->address}}
                                     </div>
                                     @if($listModel->User ? $listModel->User->website!='':'')
                                    <div class="profile-website"> <i class="fa fa-link"></i> <a  target="_blank">{{$listModel->User->website}}</a> 
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="social-sidebar side-box">
                                <ul class="listnone follow-icon">
                                    @if($listModel->User->facebookURl !='')
                                    <li><a href="{{$listModel->User->facebookURl}}"><i class="fa fa-facebook-square"></i></a></li>
                                    @endif
                                    @if($listModel->User->twitterUrl !='')
                                    <li><a href="{{$listModel->User->twitterUrl}}"><i class="fa fa-twitter-square"></i></a></li>
                                    @endif
                                    @if($listModel->User->pinterestUrl !='')
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    @endif
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
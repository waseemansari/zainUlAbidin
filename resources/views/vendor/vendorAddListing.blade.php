@extends('layouts._template')
@section('indexPage')
  
 @include('vendor.vendorNavbar')
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dashboard-page-head">
          <div class="page-header">
            <h1>Add Your New Listing</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 add-listing-dashboard">
        <div class="row">
          <div class="col-md-12 dashboard-form">
            <div class="bg-white pinside40 mb30">
               @if(session()->has('successMessage'))
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> {{session()->get('successMessageProfile') }}.
                                                  </div>
                                @endif
                                @if(session()->has('errorMessage'))
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> {{session()->get('errorMessageProfile') }}.
                                                  </div>
                                @endif
              @if($count==0)
              <form method="POST" action="{{ route('vendor.list') }}" enctype="multipart/form-data">
                @csrf
                <!-- Form Name -->
                <h2 class="form-title">Location Description &amp; Price</h2>
                
                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-md-12 control-label" for="title">Title<span class="required">*</span></label>
                  <div class="col-md-12">
                    <input id="title" name="heading" type="text" placeholder="heading" class="input-md form-control @error('heading') is-invalid @enderror" name="email" value="{{ old('heading') }}">
                    @error('heading')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label" for="Address">Address</label>
                      <div class="">
                        <textarea class="input-md form-control @error('address') is-invalid @enderror" id="Address" name="address" rows="6">{{ old('address') }}</textarea>
                        @error('address')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class=" control-label" for="country">Country</label>
                      <div class="">
                        <select id="country" name="country" class="text-capitalize form-control @error('country') is-invalid @enderror">
                          <option value="">Select Country</option>
                          @foreach($country as $countryKey)
                            <option value="{{$countryKey->id}}">{{$countryKey->title}}</option>
                          @endforeach
                        </select>
                        @error('country')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">City<span class="required">*</span></label>
                      <div class="">

                        <select id="city" name="city" type="text" placeholder="Title" class="text-capitalize form-control @error('city') is-invalid @enderror">
                           <option value="">Select City</option>
                        </select>


                        @error('city')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                </div>
                <!-- Textarea -->
                <div class="form-group row">
                  <label class="col-md-12 control-label" for="description">Descriptions</label>
                  <div class="col-md-12">
                    <textarea class="form-control" id="description" name="description" rows="6">{{ old('description') }}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"> 
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class=" control-label" for="categorytype">Category Type</label>
                      <div class=" ">
                        <select id="categorytype" name="category" class="text-capitalize form-control @error('category') is-invalid @enderror">
                          <option value="">Select Category</option>
                         @foreach($category as $categoryKey)
                            <option value="{{$categoryKey->id}}">{{$categoryKey->title}}</option>
                          @endforeach
                        </select>
                        @error('category')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="control-label" for="seatcapacity">Seat Capacity</label>
                      <div class=" ">
                        <select id="seatcapacity" name="seat" class="text-capitalize form-control @error('seat') is-invalid @enderror">
                         <option value="">Select Seats</option>
                          @foreach($seat as $seatKey)
                            <option value="{{$seatKey->id}}">{{$seatKey->title}}</option>
                          @endforeach
                        </select>
                        @error('seat')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class=" control-label" for="price">Price</label>
                      <div class="">
                        <select id="price" name="price_id" class="text-capitalize form-control @error('price_id') is-invalid @enderror">
                          <option value="">Select Price</option>
                          @foreach($price as $priceKey)
                            <option value="{{$priceKey->id}}">{{$priceKey->title}} {{$priceKey->sign}}</option>
                          @endforeach
                        </select>
                        @error('price_id')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <h2 class="form-title mt30">Map Location Info</h2>
                <div class="row">
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Latitude (for Google Maps)<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="latitude" type="text" placeholder="Latitude" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Longitude (for Google Maps)<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="longitude" type="text" placeholder="Longitude" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                  <!-- image -->
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Listing Image<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="image1" type="file" placeholder="Longitude" class="input-md text-capitalize form-control @error('image1') is-invalid @enderror">
                        @error('image1')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Listing Image<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="image2" type="file" placeholder="Longitude" class="input-md text-capitalize form-control @error('image2') is-invalid @enderror">
                        @error('image2')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Listing Image<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="image3" type="file" placeholder="Longitude" class="input-md text-capitalize form-control @error('image3') is-invalid @enderror">
                        @error('image3')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Listing Image<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="image4" type="file" placeholder="Longitude" class="input-md text-capitalize form-control @error('image4') is-invalid @enderror">
                        @error('image4')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>

                  </div>
                  <!-- end image -->
                  <div class="col-md-12 mb20">
                    <div class="map" id="googleMap"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                     <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
              @else
                <form method="POST" action="{{ route('vendor.listUpdate',$modelList->id) }}" enctype="multipart/form-data">
                @csrf
                <!-- Form Name -->
                <h2 class="form-title">Location Description &amp; Price</h2>
                
                <!-- Text input-->
                <div class="form-group row">
                  <label class="col-md-12 control-label" for="title">Title<span class="required">*</span></label>
                  <div class="col-md-12">
                    <input id="title" name="heading" type="text" placeholder="heading" class="input-md form-control @error('heading') is-invalid @enderror" name="email" value="{{ $modelList->heading }}">
                    @error('heading')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label" for="Address">Address</label>
                      <div class="">
                        <textarea class="input-md form-control @error('address') is-invalid @enderror" id="Address" name="address" rows="6">{{ $modelList->address }}</textarea>
                        @error('address')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class=" control-label" for="country">Country</label>
                      <div class="">
                        <select id="country" name="country" class="text-capitalize form-control @error('country') is-invalid @enderror">
                          <option value="{{ $modelList->Country->id }}">{{ $modelList->Country->title }}</option>
                          @foreach($country as $countryKey)
                            <option value="{{$countryKey->id}}">{{$countryKey->title}}</option>
                          @endforeach
                        </select>
                        @error('country')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">City<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="city" type="text" placeholder="Title" class="text-capitalize form-control @error('city') is-invalid @enderror" value="{{ $modelList->city }}">
                        @error('city')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                </div>
                <!-- Textarea -->
                <div class="form-group row">
                  <label class="col-md-12 control-label" for="description">Descriptions</label>
                  <div class="col-md-12">
                    <textarea class="form-control" id="description" name="description" rows="6">{{ $modelList->description }}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"> 
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class=" control-label" for="categorytype">Category Type</label>
                      <div class=" ">
                        <select id="categorytype" name="category" class="text-capitalize form-control @error('category') is-invalid @enderror">
                          <option value="{{ $modelList->Category->id}}">{{ $modelList->Category->title }}</option>
                         @foreach($category as $categoryKey)
                            <option value="{{$categoryKey->id}}">{{$categoryKey->title}}</option>
                          @endforeach
                        </select>
                        @error('category')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="control-label" for="seatcapacity">Seat Capacity</label>
                      <div class=" ">
                        <select id="seatcapacity" name="seat" class="text-capitalize form-control @error('seat') is-invalid @enderror">
                         <option value="{{ $modelList->Seat->id}}">{{ $modelList->Seat->title}}</option>
                          @foreach($seat as $seatKey)
                            <option value="{{$seatKey->id}}">{{$seatKey->title}}</option>
                          @endforeach
                        </select>
                        @error('seat')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class=" control-label" for="price">Price</label>
                      <div class="">
                        <select id="price" name="price_id" class="text-capitalize form-control @error('price_id') is-invalid @enderror">
                          <option value="{{ $modelList->Price->id}}">{{ $modelList->Price->title}}</option>
                          @foreach($price as $priceKey)
                            <option value="{{$priceKey->id}}">{{$priceKey->title}} {{$priceKey->sign}}</option>
                          @endforeach
                        </select>
                        @error('price_id')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <h2 class="form-title mt30">Map Location Info</h2>
                <div class="row">
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Latitude (for Google Maps)<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="latitude" type="text" placeholder="Latitude" class="form-control input-md" value="{{ $modelList->latitude }}" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Longitude (for Google Maps)<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="longitude" type="text" placeholder="Longitude" class="form-control input-md" value="{{ $modelList->longitude }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6"> 
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label" for="state">Listing Image<span class="required">*</span></label>
                      <div class="">
                        <input id="state" name="image" type="file" placeholder="Longitude" class="input-md text-capitalize form-control @error('image') is-invalid @enderror">
                        @error('image')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb20">
                    <div class="map" id="googleMap"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                     <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
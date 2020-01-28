@extends('layouts._template')
@section('indexPage')
  

    @include('couple.coupleNavbar')
    <!-- end navbar -->
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="page-title">
                                    <h1>My Wishlist <small> vendor in wishlist</small><h3 class="btn btn-circle btn-success">{{count($wishlist)}}</h3></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="#" class="btn btn-default">BUtton</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wishlist-board">
                        <div class="row"> 
                            @if(session()->has('successMessageDelete'))
                                                              <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> {{session()->get('successMessageDelete') }}.
                                                  </div>
                                @endif
                            @if(count($wishlist) > 0)
                            @foreach($wishlist as $key)
                            <div class="col-md-4">
                                <div class="vendor-list-block mb30">
                                    <!-- vendor list block -->
                                    <div class="vendor-img">
                                        <a href='{{url("/vendor_details/{$key->ListModel_id}")}}'>
                                            @if($key->imageList)
                                            <img src="{{ asset('storage/' . $key->imageList->image) }}" alt="wedding venue" class="img-responsive"  style="height: 200px; width: 100%">
                                            @else
                                            <img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive">
                                            @endif
                                            
                                        </a>
                                        <div class="category-badge">
                                            <a href="#" class="category-link">venue</a></div>
                                        <div class="price-lable">{{$key->price ? $key->price->sign :''}} {{$key->price ? $key->price->title: ''}}</div>
                                        <div class="favorite-action"> <a href="{{route('removeWishList',[$key->id,$key->user_id])}}" class="fav-icon"><i class="fa fa-close"></i></a> </div>
                                    </div>
                                    <div class="vendor-detail">
                                        <!-- vendor details -->
                                        <div class="caption">
                                            <h2><a href='{{url("/vendor_details/{$key->ListModel_id}")}}' class="title">{{$key->heading}}</a></h2>
                                            <div class="vendor-meta"> <span class="location"> <i class="fa fa-map-marker map-icon"></i> {{$key->address}} {{$key->address}}</span> <span class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.vendor details -->
                                </div>
                                <!-- /.vendor list block -->
                            </div>
                            @endforeach
                            @else
                            <p class="text-danger">There are not any your wish list</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
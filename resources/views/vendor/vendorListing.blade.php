@extends('layouts._template')
@section('indexPage')

    @include('vendor.vendorNavbar')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="page-header">
                            <h1>My Venue Listing <small>Find your listing and edit or delete your venue listing.</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if(session()->has('successVendorDelete'))
                                                              <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> {{session()->get('successVendorDelete') }}.
                                                  </div>
                                @endif
                                @if(session()->has('errorVendorDelete'))
                                        <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Wrong!</strong> {{session()->get('errorVendorDelete') }}.
                                                  </div>
                                @endif
                <div class="col-md-12 my-listing-dashboard">
                    <div class="table-head">
                        <div class="row">
                            <div class="col-md-2"><span class="th-title">Image</span></div>
                            <div class="col-md-3"><span class="th-title">Title</span></div>
                            <div class="col-md-3"><span class="th-title">Address</span></div>
                            <div class="col-md-2"><span class="th-title">Price</span></div>
                            <div class="col-md-2"><span class="th-title">Action</span></div>
                        </div>
                    </div>
                   @foreach($list as $listKey)
                    <div class="listing-row">
                        <!-- listing row -->
                        <div class="row">
                            <div class="col-md-2 listing-thumb">
                                @if($listKey->imageList !='')
                                <img width="100" height="100" class="img-responsive img-thumbnail" src="{{ asset('storage/' . $listKey->imageList->image) }}" alt="">
                                @endif
                            </div>
                            <div class="col-md-3 listing-title text-capitalize">
                                <h2>{{ $listKey->heading}}</h2> </div>
                            <div class="col-md-3 listing-address">{{ $listKey->address}}</div>
                            <div class="col-md-2 listing-price">{{ $listKey->price->sign}} {{ $listKey->price->title}}</div>
                            <div class="col-md-2 listing-action">
                                <a href='{{url("vendor_details/{$listKey->id}")}}' class="btn btn-info btn-xs">Detail</a> 
                                <a href='{{url("vendor/list/edit/{$listKey->id}")}}' class="btn btn-primary btn-xs">Edit</a>   
                                <a href='{{url("vendor/list/delete/{$listKey->id}")}}' class="btn btn-danger btn-xs" onclick="return confirm('Are you sure that you are delete this list?')">Delete</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- listing row -->
                </div>
                <div class="col-md-12 tp-pagination">
                    {{$list->links()}}
                    
                </div>
            </div>
        </div>
    </div>

@endsection
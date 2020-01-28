@extends('layouts._template')
@section('indexPage')
    @include('vendor.vendorNavbar')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="page-header">
                            <h1>Vendor Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="couple-board">
                        <div class="row">
                          <div class="col-md-12 my-listing-dashboard">
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
                    <div class="table-head">
                        <div class="row">
                            <div class="col-md-1"><span class="th-title">#</span></div>
                            <div class="col-md-1"><span class="th-title">View List</span></div>
                            <div class="col-md-2"><span class="th-title">Name</span></div>
                            <div class="col-md-2"><span class="th-title">Phone</span></div>
                            <div class="col-md-2"><span class="th-title">Email</span></div>
                            <div class="col-md-1"><span class="th-title">wedding</span></div>
                             <div class="col-md-1"><span class="th-title">Guest</span></div>
                             <div class="col-md-1"><span class="th-title">Date</span></div>
                             <div class="col-md-1"><span class="th-title">Send</span></div>
                             
                        </div>
                    </div>
                    @php $keyCount=1; @endphp
                   @foreach($order as $key)
                    <div class="listing-row">
                        <!-- listing row -->
                        <div class="row">
                            <div class="col-md-1">{{$keyCount++}}</div>
                            <div class="col-md-1">
        <a href='{{url("vendor/view_list/{$key->id}")}}' target="_blank">View List</a>
                            </div>
                            <div class="col-md-2 ">{{$key->name}} </div>
                            <div class="col-md-2 ">{{$key->phone}}</div>
                            <div class="col-md-2 ">{{$key->email}}</div>
                            <div class="col-md-1 ">{{$key->weddingDate}}</div>
                            <div class="col-md-1 ">{{$key->guestNumber_id}}</div>
                            <div class="col-md-1 ">{{$key->created_at->format('d-m-y')}}</div>
                              @if($key->status==0)
                            <div class="col-md-1 listing-action">
                                <a href='{{url("vendor/accept_offer/{$key->id}")}}' class="btn btn-info btn-xs">Accept</a> 
                                   
                                <a href='{{url("vendor/reject_offer/{$key->id}")}}' class="btn btn-warning btn-xs" onclick="return confirm('Are you sure that you are reject this list?')">Reject</a>
                            </div>
                            @elseif($key->status==1)
                            <div class="col-md-1 listing-action">
                                <p class="text-success">Accepted</p>
                            </div>
                            @elseif($key->status==2)
                            <div class="col-md-1 listing-action">
                                <p class="text-success">Rejected</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    <!-- listing row -->
                     {{$order->links()}}
                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
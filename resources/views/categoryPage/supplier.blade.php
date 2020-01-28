@extends('layouts._template')
@section('indexPage')
    
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        
                        <h1 class="text-capitalize">{{$categorey->title}}</h1>
                        <p>{{$categorey->description}}.</p>
                        <span class="label label-default">{{$listCount}} {{$categorey->title}}</span>
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
                        <li><a href="{{route('real-wedding-single')}}">Home</a></li>
                        <li class="active">{{$categorey->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                @if(session()->has('messageWishlist'))
                <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Success!</strong> {{session()->get('messageWishlist') }}.
                </div>
             @endif
             @if(session()->has('messageWishlistError'))
     <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Wrong!</strong> {{session()->get('messageWishlistError') }}.
     </div>
@endif
                <div class="col-md-3">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title">
                            <h2>Refine Your Search</h2>
                        </div>
                        <form method="get" action="{{route('searchVenu')}}">
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="photographystyle">Dress Style</label>
                                <select id="photographystyle" name="venu" class="form-control">
                                    @if(count($categoreySideBar)>0)
                                            <option value=" ">Select Venu</option>
                                            @foreach($categoreySideBar as $cateKey)

                                             <option value="{{encrypt($cateKey->id)}}">{{$cateKey->title}}</option>
                                             @endforeach
                                             @else
                                             <option value="">Site is maintaince mode</option>
                                            @endif
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="distance">Distance from</label>
                                <select id="distance" name="city" class="form-control">
                                    @if(count($city)>0)
                                            <option value=" ">Select City</option>
                                            @foreach($city as $cityKey)
                                       
                                             <option value="{{encrypt($cityKey->id)}}">{{$cityKey->title}}</option>
                                             @endforeach
                                             @else
                                             <option value="">Site is maintaince mode</option>
                                    @endif
                                </select>
                            </div>
                            <!-- <div class="col-md-12 form-group">
                                <div class="price-range default-range">
                                    <label for="amount" class="control-label">Price range:</label>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <div id="slider-range"></div>
                                </div>
                            </div> -->
                            <div class="col-md-12 form-group rating">
                                <label class="control-label">Select Rating </label>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                    <label for="checkbox-0" class="control-label"> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                    <label for="checkbox-1" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-2" value="3" class="styled">
                                    <label for="checkbox-2" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-3" value="4" class="styled">
                                    <label for="checkbox-3" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-4" value="5" class="styled">
                                    <label for="checkbox-4" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @if(count($list) > 0 )
                        @foreach($list as $listKey)
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                            <a href="{{route('vendor-details',[$listKey->id])}}">
                            @if($listKey->imageList !='')
                             <img src="{{ asset('storage/' . $listKey->imageList->image) }}" alt="wedding venue" class="img-responsive" height="300">
                            @endif
                             </a>

                                <div class="favourite-bg">
                                    <a href="{{route('real-wedding-single')}}" class=""></a>
                                    
                                    <a href="{{route('wishList',$listKey->id)}}" class="">
                                        
                                       <i class="fa fa-heart"></i> 
                                    </a>
                                </div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('vendor-details',[$listKey->id])}}" class="title">{{Str::limit($listKey->heading,20)}}</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> {{Str::limit($listKey->address,20)}} {{Str::limit($listKey->city,20)}}.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                @if($listKey->price !='')
                                <div class="vendor-price">
                                    <div class="price">{{$listKey->price->sign}} {{$listKey->price->title}}</div>
                                </div>
                                @endif
                            </div>
                            <!-- venue details -->
                        </div>
                        @endforeach
                        @else
                         <p>There are not found any thing please try again with different keyword <a href="{{url('/')}}">Search Again</a></p>
                        @endif
                        
                       </div>
                    <!--side bar -->
                    <div class="row">
                        <div class="col-md-12 tp-pagination">
                                {{$list->links()}}
                        </div>
                    </div>
                    <!-- end side bar -->
                </div>
            </div>
        </div>
    </div>


@endsection

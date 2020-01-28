@extends('layouts._template')
@section('indexPage')
 
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-newly-married-couple icon-white"></i>
                        </div>
                        <h1>Real Wedding Listing</h1>
                        <p>Find the perfect wedding vendor for your wedding. Search wedding reception vendor reviews and vendors in your area.</p>
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
                        <li class="active">Real Wedding Listings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/real-wedding-3.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title">Caitlin &amp; Hentze</a></h2>
                            <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 5 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/real-wedding-3.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title">Lewers &amp; Isabella</a></h2>
                            <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 4 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/real-wedding-3.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title">Castleton &amp; Sean </a></h2>
                            <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 3 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/real-wedding-3.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title">Merry & Generic</a></h2>
                            <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 5 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/real-wedding-3.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title">Claudia & Purves</a></h2>
                            <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 4 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <div class="real-wedding-img">
                            <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/real-wedding-3.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title">Alana & Hopley</a></h2>
                            <p class="real-wed-meta"><span class="wed-day-meta"><i class="icon-wedding-day icon-size-18"></i> 3 june,2016</span>
                                <span class="wed-location-meta"> <i class="icon-wedding-location icon-size-18"></i> Surat, India</span>
                            </p>
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>
            </div>
            <div class="col-md-12 tp-pagination">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

   
@endsection
@extends('layouts._template')
@section('indexPage')
    
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                            <i class="icon icon-size-60 icon-wedding-dress icon-white"></i>
                        </div>
                        <h1>Wedding Dresses</h1>
                        <p>Dresses often play a major role in conveying the style of a wedding and help make it memorable and beautiful.</p>
                        <span class="label label-default">12 Venue Vendor</span>
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
                        <li class="active">Wedding Dresses</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title">
                            <h2>Refine Your Search</h2>
                        </div>
                        <form>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="photographystyle">Dress Style</label>
                                <select id="photographystyle" name="photographystyle" class="form-control">
                                    <option value="">Select Dress</option>
                                    <option value="Barn">Bride</option>
                                    <option value="Boutique">Bridesmaids</option>
                                    <option value="Father of the Bride">Father of the Bride</option>
                                    <option value="Father of the Groom">Father of the Groom</option>
                                    <option value="Mother of the Bride">Mother of the Bride</option>
                                    <option value="Mother of the Groom">Mother of the Groom</option>
                                    <option value="Groom">Groom</option>
                                    <option value="Groomsmen">Groomsmen</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="distance">Distance from</label>
                                <select id="distance" name="distance" class="form-control">
                                    <option value="">Select Distance</option>
                                    <option value="75 miles">75 miles</option>
                                    <option value="50  miles">50 miles</option>
                                    <option value="25 miles">25 miles</option>
                                    <option value="20 miles">20 miles</option>
                                    <option value="All">All</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="price-range default-range">
                                    <label for="amount" class="control-label">Price range:</label>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <div id="slider-range"></div>
                                </div>
                            </div>
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
                                <button type="reset" value="Reset" class="btn btn-reset"><i class="fa fa-repeat"></i>Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="popular-label"></div>
                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="rated-label"></div>
                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="feature-label"></div>
                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>

                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                        <div class="col-md-4 vendor-box">
                            <!-- venue box start-->
                            <div class="vendor-image">
                                <!-- venue pic -->
                                <a href="{{route('real-wedding-single')}}"><img src="{{asset('template/images/vendor-4.jpg')}}" alt="wedding venue" class="img-responsive"></a>


                                <div class="favourite-bg"><a href="{{route('real-wedding-single')}}" class=""><i class="fa fa-heart"></i></a></div>
                            </div>
                            <!-- /.venue pic -->
                            <div class="vendor-detail">
                                <!-- venue details -->
                                <div class="caption">
                                    <!-- caption -->
                                    <h2><a href="{{route('real-wedding-single')}}" class="title">Vendor Dresses Title</a></h2>
                                    <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                                </div>
                                <!-- /.caption -->
                                <div class="vendor-price">
                                    <div class="price">$390 - $600</div>
                                </div>
                            </div>
                            <!-- venue details -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 tp-pagination">
                            <ul class="pagination">
                                <li>
                                    <a href="{{route('real-wedding-single')}}" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>
                                </li>
                                <li class="active"><a href="{{route('real-wedding-single')}}">1</a></li>
                                <li><a href="{{route('real-wedding-single')}}">2</a></li>
                                <li><a href="{{route('real-wedding-single')}}">3</a></li>
                                <li><a href="{{route('real-wedding-single')}}">4</a></li>
                                <li><a href="{{route('real-wedding-single')}}">5</a></li>
                                <li>
                                    <a href="{{route('real-wedding-single')}}" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
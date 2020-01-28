@extends('layouts._template')
@section('indexPage')
 

    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Wedding Blog Single Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-left">
                    <!-- content left -->
                    <div class="row">
                        <div class="col-md-12 real-wedding-content">
                            <!-- blog holder -->
                            <img src="{{asset('template/images/real-wedding-large.jpg')}}" alt="Hello">
                            <p>Duis auctor finibus orci, ac convallis erat. Ut laoreet hendrerit lacinia. Maecenas sit amet libero egestas massa faucibus egestas ac ut ante. Phasellus nec elementum dui. Cras tortor diam, maximus at iaculis in, dapibus ac nunc. </p>
                            <p>Variations of passages of cenas non diam non elit tincidunt suscipit id id tortor. Phasellus ultrices vitae eros eget lobortis. Duis vestibulum augue quis iaculis sagittis. Nulla at condimentum augue. Aenean egestas auctor magna ac egestas.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered note alteration in some form, by injected humour, or randomised words which don't look even slightly our its embarrassing hidden in the middle of text which don't lookinge eventhe readable content.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed nisl facilisis, consectetur quam vitae, tempor urna. Cras et risus id nulla vestibulum fringilla. Aliquam porta rhoncus ex sed semper. Vestibulum orci turpis, condimentum egestas nisi eget, porta efficitur eros. Vivamus id nisl tortor. Nullam pulvinar dictum felis. Ut dignissim diam et suscipit suscipit.</p>
                            <p>Nullam faucibus semper lacus in facilisis. Donec luctus, diam sit amet consequat ultrices, odio sapien semper neque, in molestie massa neque vitae mi. Proin fringilla ultrices ligula ac tempus. Sed ac sapien non ante interdum pharetra at et lacus. </p>
                            <p> Nam vitae laoreet sem. Nullam nisi ante, iaculis nec diam id, auctor auctor dui. Nunc quis tincidunt ipsum. Curabitur convallis vitae metus vitae pulvinar. In in pulvinar risus. Proin congue elementum nibh sed vestibulum. Donec facilisis posuere pulvinar. Aliquam vitae eros eget justo dapibus eleifend quis nec dolor. Integer augue tellus, auctor quis lectus a, sagittis mollis ex. </p>
                            <div class=" ">
                                <div class="image-block col-sm-4" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city1.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                                <div class="image-block col-sm-8" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city2.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                                <div class="image-block col-sm-4" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city3.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                                <div class="image-block col-sm-4" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city4.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                                <div class="image-block col-sm-4" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city5.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                                <div class="image-block col-sm-8" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city6.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                                <div class="image-block col-sm-4" style="background: url(http://www.prepbootstrap.com/Content/images/template/ResponsiveImageTiles/city7.jpg) no-repeat center top;background-size:cover;">
                                    <p> Image Info </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 leave-comments">
                            <h2>Leave A Comments</h2>
                            <form class="form-horizontal">
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="textarea">Comment:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="textarea" name="textarea" rows="4"></textarea>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-7">
                                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">E-Mail</label>
                                    <div class="col-md-7">
                                        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="subject">Subject</label>
                                    <div class="col-md-7">
                                        <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 sr-only control-label" for="textarea">Comment:</label>
                                    <div class="col-md-9">
                                        <button class="btn btn-primary">Submit A Comments</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.content left -->
                <div class="col-md-4 right-sidebar">
                    <!-- right sidebar -->
                    <div class="row">
                        <div class="col-md-12 widget widget-search">
                            <!-- widget -->
                            <div class="well-box">
                                <h2 class="widget-title">Search bar</h2>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
              <button class="btn btn-primary btn-lg" type="button"> <i class="fa fa-search"></i> </button>
              </span> </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <!-- /.widget -->
                        <div class="col-md-12 widget widget-category">
                            <!-- widget -->
                            <div class="well-box">
                                <h2 class="widget-title">Categories</h2>
                                <ul class="listnone angle-double-right">
                                    <li><a href="#">Waterside</a> <span>(4)</span></li>
                                    <li><a href="#">Romantic</a> <span>(2)</span></li>
                                    <li><a href="#">Outside Weddings</a> <span>(6)</span></li>
                                    <li><a href="#">Palace</a> <span>(4)</span></li>
                                    <li><a href="#">Manor House</a> <span>(8)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget -->
                        <div class="col-md-12 widget widget-recent-post">
                            <!-- widget -->
                            <div class="well-box">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="rc-post-holder row">
                                    <div class="col-md-5">
                                        <div class="post-image">
                                            <a href="#"><img src="images/post-pic.jpg" class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="rc-post col-md-7">
                                        <h3><a href="#" class="link">Heading title here</a></h3>
                                        <div class="post-meta"> <span class="date-meta">ON <a href="#">October 7, 2015</a></span> </div>
                                    </div>
                                </div>
                                <div class="rc-post-holder row">
                                    <div class="col-md-5">
                                        <div class="post-image">
                                            <a href="#"><img src="images/post-pic-2.jpg" class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="rc-post col-md-7">
                                        <h3><a href="#" class="link">Heading title here</a></h3>
                                        <div class="post-meta"> <span class="date-meta">ON <a href="#">October 6, 2015</a></span> </div>
                                    </div>
                                </div>
                                <div class="rc-post-holder row">
                                    <div class="col-md-5">
                                        <div class="post-image">
                                            <a href="#"><img src="images/post-pic-3.jpg" class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="rc-post col-md-7">
                                        <h3><a href="#" class="link">Heading title here</a></h3>
                                        <div class="post-meta"> <span class="date-meta">ON <a href="#">October 5, 2015</a></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget -->
                        <div class="col-md-12 widget widget-archive">
                            <!-- widget -->
                            <div class="well-box">
                                <h2 class="widget-title">Archives</h2>
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">August 2015</option>
                                    <option value="2">July 2015</option>
                                    <option value="2">June 2015</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.widget -->
                        <div class="col-md-12 widget widget-tag">
                            <!-- widget -->
                            <div class="well-box">
                                <h2 class="widget-title">Tags</h2>
                                <a href="#">Palace</a> <a href="#">Romantic</a> <a href="#">Manor House</a> <a href="#">Hotel</a> <a href="#">Garden Wedding</a> <a href="#">Boutique</a> <a href="#">Intimate</a>
                            </div>
                        </div>
                        <!-- /.widget -->
                    </div>
                </div>
                <!-- /.right sidebar -->
            </div>
        </div>
    </div>


@endsection
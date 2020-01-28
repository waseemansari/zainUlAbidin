<div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>Welcome to Wedding Vendor.</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                        <li><a href="{{route('help')}}"> Help </a></li>
                        <li><a href="{{route('price')}}">Pricing</a></li>
                        @guest
                        
                        <li><a href="{{route('register')}}" class=" ">I m couple / Register</a></li>
                        <li><a href="{{route('signup-vendor')}}">Are you vendor?</a></li>
                        <li><a href="{{route('login')}}">Log in</a></li>
                        <li>
                            <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                        </li>
                        @else
                        @if(auth::user()->type=='1')
                        <li>
                            <a href="{{url('profile')}}">My Profile</a>
                        </li>
                        @endif
                        @if(auth::user()->type=='2')
                        <li>
                            <a href="{{url('vendor/vendor_profile')}}">your Profile</a>
                        </li>
                        @endif

                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                         </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="/"><img src="{{asset('template/images/logo.png')}}" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="{{url('/')}}">Home</a>
                                <!-- <ul>
                                    <li><a href="index.html" title="Home" class="animsition-link">Home</a></li>
                                    <li><a href="index-2.html" title="Home v.2" class="animsition-link">Home v.2</a></li>
                                </ul> -->
                            </li>
                            <li><a href="#">Listing</a>
                                <ul>
                                    <li><a href="vendor-listing-row-map.html" title="Home" class="animsition-link">List / Half Map</a></li>
                                    <li><a href="vendor-listing-sidebar.html" title="Home" class="animsition-link">List / Sidebar Left</a></li>
                                    <li><a href="vendor-listing-no-sidebar.html" title="Home" class="animsition-link">List / No Sidebar</a></li>
                                    <li><a href="vendor-listing-top-map.html" title="Home" class="animsition-link">Top Map / List</a></li>
                                    <li><a href="vendor-list-4-colmun.html" title="Home" class="animsition-link">4 Column List</a></li>
                                    <li><a href="vendor-list-3-colmun.html" title="Home" class="animsition-link">3 Column List</a></li>
                                    <li><a href="vendor-list-horizontal.html" title="Home" class="animsition-link">Horizontal List </a></li>
                                    <li><a href="vendor-list-new.html" title="Home" class="animsition-link">List Variations </a></li>
                                    <li><a href="vendor-listing-bubba.html">Bubba Style Listing</a></li>
                                    <li><a href="vendor-listing-ocean.html">Ocean Style Listing</a></li>
                                </ul>
                            </li>
                            <li><a href="vendor-details.html">Vendor</a>
                                <ul>
                                    <li><a href="vendor-details.html">Vendor Simple</a></li>
                                    <li><a href="vendor-details-tabbed.html">Vendor Tabbed</a></li>
                                    <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="Home" class="animsition-link">Suppliers</a>
                                
                                <ul>
                                    @foreach($category as $categoryKey)
                                    <li>
                                        <a href="{{route('categoryList',[encrypt($categoryKey->id)])}}">{{$categoryKey->title}}</a>
                                    </li>
                                     @endforeach
                                    
                                </ul>
                               
                            </li>
                            <li><a href="#">Planning Tools</a>
                                <ul>
                                    <li><a href="{{route('planning-to-do')}}">To Do List</a></li>
                                    <li><a href="{{route('planning-budget')}}">Budget Planner</a></li>
                                    <li><a href="{{route('register')}}">Couple Signup (LP)</a></li>
                                    <li><a href="{{route('couple-dashboard')}}">Couple Admin</a></li>
                                    <li><a href="{{route('dashboard-vendor')}}">Vendor Admin</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="{{route('real-wedding-listing')}}">Real Weddings</a>
                            </li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
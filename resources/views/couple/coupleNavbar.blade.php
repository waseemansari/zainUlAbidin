<div class="tp-dashboard-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-header">
                    <div class="profile-pic col-md-2"></div>
                    <div class="profile-info col-md-9 text-center text-danger">
                        <h1 class="profile-title text-danger">Welcome Back {{Auth::user()->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="tp-dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 dashboard-nav">
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a href="{{route('couple-dashboard')}}"><i class="fa fa-dashboard db-icon"></i>My Dashboard</a></li>
                        <li><a href="{{route('couple-wishlist')}}"><i class="fa fa-heart db-icon"></i>My Wishlist </a></li>
                        <li><a href="{{route('couple-checklist')}}"><i class="fa fa-list db-icon"></i>My Checklist</a></li>
                        <li><a href="{{route('couple-budget')}}"><i class="fa fa-calculator db-icon"></i>My Budget</a></li>
                        <li><a href="{{route('couple-guestlist')}}"><i class="fa fa-users db-icon"></i>My Guest List</a></li>
                        <li><a href="{{route('couple-profile')}}"><i class="fa fa-user db-icon"></i>My Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
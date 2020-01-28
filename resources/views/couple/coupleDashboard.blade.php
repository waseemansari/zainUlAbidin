@extends('layouts._template')
@section('indexPage')
  @include('couple.coupleNavbar')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h1>My Dashboard <small>Welcome Couple.</small></h1>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- wedding days block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Wedding days to go</h4>
                        <div class="wd-days-count mb40 mt40">
                            @php $date = date('Y-m-d'); @endphp
                            @if($date > auth::user()->wedding)
                               <p class="title-number">Wedding Done</p>
                            @else
                            <h1 class="title-number">{{$dayCount}}</h1>
                            @endif
                        </div>
                        <div>{{$wedding }}</div>
                    </div>
                </div>
                <!-- wedding days block -->
                
                <div class="col-md-4">
                    <!-- wedding budget block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Your Budget</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number">
                                 {{$totalBudget}}</h1>
                        </div>
                        <div>Spent  {{ $spendBudget}} out of  {{$totalBudget}} so far.</div>
                    </div>
                </div>
                
                <!-- wedding budget block -->
                <div class="col-md-4">
                    <!-- wedding budget block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Checklist - todos</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number">{{$toDoListRemaining}}</h1>
                        </div>
                        <div>Completed {{$toDoListDone}} of {{$toDoListRemaining}} checklist items</div>
                    </div>
                </div>
                <!-- wedding budget block -->
                <div class="col-md-4">
                    <!-- wedding wishlist block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Wishlit Item</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number">{{$wishList}}</h1>
                        </div>
                        <div>Add more item. Compare &amp; Finalize</div>
                    </div>
                </div>
                <!-- wedding wishlist block -->
                <div class="col-md-4">
                    <!-- wedding budget block -->
                    <div class="bg-white pinside40 mb30">
                        <h4>Invited guests</h4>
                        <div class="wd-days-count mb40 mt40">
                            <h1 class="title-number">{{$inviteGuest}}</h1>
                        </div>
                        <div class="guest-status"><span class="invite-accepted">{{$inviteGuestAccept}} accepted</span> | <span class="invite-descline">{{$inviteGuestReject}} declined</span> | <span class="invite-noresponse">{{$inviteGuestNotResponse}} not responded</span></div>
                    </div>
                </div>
                <!-- wedding budget block -->
            </div>
        </div>
    </div>


@endsection
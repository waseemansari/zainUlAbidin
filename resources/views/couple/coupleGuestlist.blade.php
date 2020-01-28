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
                                    <h1>My Guestlist <small>Your Summary</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="{{route('couple.addGuest')}}" class="btn btn-default">Add Guest</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="budget-board">
                @if(session()->has('successMessageDelete'))
                 <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session()->get('successMessageDelete') }}.
                </div>
                @endif
                @if(session()->has('successMessage'))
                 <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session()->get('successMessage') }}.
                </div>
                @endif
                <div class="list-group">
                    <div href="#" class="list-group-item active">
                        <div class="row">
                            <div class="col-md-2"> Guest Name </div>
                            <div class="col-md-2">Phone</div>
                            <div class="col-md-2">Email</div>
                            <div class="col-md-2">Address</div>
                            <div class="col-md-1">Invite</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Edit / Delete</div>
                        </div>
                    </div>
                    @if(count($guest) > 0)
                    @foreach($guest as $key)
                    <div class="list-group-item">
                        <div class="row">
                        <div class="col-md-2"><a class="#" data-toggle="collapse"  aria-expanded="false" aria-controls="Ceremony"> {{$key->name}} </a> </div>
                            <div class="col-md-2">{{$key->phone}}</div>
                            <div class="col-md-2">{{$key->email}}</div>
                            <div class="col-md-2">{{$key->address}}</div>
                            <div class="col-md-1">
                                @if($key->invite==0)
                                <a href="{{route('inviteGuest',$key->id)}}" class=" btn-delete">Invite</a>
                                @elseif($key->invite==1)
                            <p  class="text-info">not responded</p>
                             @elseif($key->invite==2)
                            <p  class="text-success">accepted</p>
                             @elseif($key->invite==3)
                            <p  class="text-danger"> declined</p>
                                @endif
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2"><a href="{{route('editGuest',$key->id)}}" class="btn-edit"><i class="fa fa-edit">Edit</i></a>
                                <a href="{{route('deleteGuest',$key->id)}}" class="btn-delete" onclick="return confirm('Are you sure you want to delete ')"><i class="fa fa-trash">Delete</i></a>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach 
                    @else
                     <div class="list-group-item">
                        <div class="row">
                            <p class="text-danger text-center">There are no any guest</p>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12 tp-pagination">
                            <ul class="pagination">
                               {{$guest->links()}}
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
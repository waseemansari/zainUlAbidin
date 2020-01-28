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
                                    <h1>My Guestlist <small> Update Guest List</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="{{url('couple_guestlist')}}" class="btn btn-default" id="show">Back</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="budget-board bg-white row" >
                @if(session()->has('successMessage'))
                 <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session()->get('successMessage') }}.
                </div>
                @endif
                <div class="col-md-1"></div>
                <div class="list-group col-md-10" style="padding: 10px;">
                    <form action="{{route('updateGuest',$guest->id)}}" method="POST">
                          @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Guest Name') }}</label>
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $guest->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="phone" class=" col-form-label text-md-right">{{ __('Phone') }}</label>
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $guest->phone }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="email" class=" col-form-label text-md-right">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$guest->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="address" class=" col-form-label text-md-right">{{ __('Address') }}</label>
                            <textarea  name="address" class="form-control @error('address') is-invalid @enderror" rows="5">{{$guest->address}}</textarea>
                                @error('address')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                        
                         <div class="form-group row">
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                         </div>
                    
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

@endsection
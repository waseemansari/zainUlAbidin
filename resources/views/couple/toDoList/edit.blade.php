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
                                    <h1>My Budget <small>Create your wedding to do and start planning.</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="{{url('couple_checklist')}}" class="btn btn-default" id="show">Back</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @if(session()->has('ToDoList'))
                 <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session()->get('ToDoList') }}.
                </div>
                @endif
            <div class="budget-board bg-white row" >
                
                <div class="col-md-1"></div>
                <div class="list-group col-md-10" style="padding: 10px;">
                    <form action="{{route('couple.updateToDoList', $toDoList->id)}}" method="POST">
                          @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="name" class=" col-form-label text-md-right">{{ __('name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{  $toDoList->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="date" class=" col-form-label text-md-right">{{ __('Date before') }}</label>
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{  $toDoList->date }}" required autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         
                         
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="description" class=" col-form-label text-md-right">{{ __('Description') }}</label>
                            <textarea  name="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{  $toDoList->description }}</textarea>
                                @error('description')
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
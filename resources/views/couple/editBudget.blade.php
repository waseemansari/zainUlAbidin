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
                                    <h1>My Budget <small>Update your wedding to do and start planning.</small></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action-block"> <a href="{{route('add-budget')}}" class="btn btn-default" id="show">Add Budget</a> </div>
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
                    <form action="{{route('updateBudget',$budget->id)}}" method="POST">
                          @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="budget" class=" col-form-label text-md-right">{{ __('Budget Category') }}</label>
                                <input id="budget" type="budget" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{ $budget->budget }}" required autocomplete="budget" autofocus>

                                @error('budget')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="estimatedCost" class=" col-form-label text-md-right">{{ __('Estimated Cost') }}</label>
                                <input id="estimatedCost" type="number" class="form-control @error('estimatedCost') is-invalid @enderror" name="estimatedCost" value="{{ $budget->estimatedCost }}" required autocomplete="estimatedCost" autofocus>

                                @error('estimatedCost')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="actualCost" class=" col-form-label text-md-right">{{ __('Actual Cost') }}</label>
                                <input id="actualCost" type="number" class="form-control @error('actualCost') is-invalid @enderror" name="actualCost" value="{{ $budget->actualCost }}" required autocomplete="actualCost" autofocus>

                                @error('actualCost')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="paidCost" class=" col-form-label text-md-right">{{ __('Paid Cost') }}</label>
                                <input id="paidCost" type="number" class="form-control @error('paidCost') is-invalid @enderror" name="paidCost" value="{{ $budget->paidCost }}" required autocomplete="paidCost" autofocus>

                                @error('paidCost')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="description" class=" col-form-label text-md-right">{{ __('Description') }}</label>
                            <textarea  name="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{ $budget->budget }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">
                            <label for="currency" class=" col-form-label text-md-right">{{ __('Your Currency ') }}</label>
                            <select name="currency">
                                <option value="{{$budget->price ? $budget->price->id : ''}}">{{$budget->price ? $budget->price->sign : ''}}</option>
                                @foreach($sign as $signKey)
                                <option value="{{$signKey->id}}">{{$signKey->sign}}</option>
                                @endforeach
                                
                            </select><br>
                                @error('currency')
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
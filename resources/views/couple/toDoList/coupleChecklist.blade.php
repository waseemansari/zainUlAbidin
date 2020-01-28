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
                                <h1>My Checklist <small>Create your wedding to do and start planning.</small></h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="action-block"> <a href="{{route('couple.addToDoList')}}" class="btn btn-default" id="show">Add To Do</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('ToDoListDelete'))
                 <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{session()->get('ToDoListDelete') }}.
                </div>
                @endif
                <div class="couple-board">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="st-accordion">
                                <!-- shortcode -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title"> <a class="title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Checklist</a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="todo-list-group">
                                                <!-- List group -->
                                                <ul class="listnone">
                                                    @php $count = 1; $currentDate = date('Y-m-d') @endphp
                                                @if(count($toDoList) > 0)

                                                @foreach($toDoList as $key)
                                                    <li class="todo-list-item">
                                                        <div class="todo-list">
                                                            <div class="row">
                                                                <div class="col-md-1">
                                                                {{$count++}}
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="todo-task">
                                                                        <h3 class="todo-title">{{$key->name}}</h3>
             <small @if($key->date<=$currentDate) style="color: red" @endif>
                {{Carbon\Carbon::createFromFormat('Y-m-d', $key->date)->format('d M Y')}}
            </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                         <div class="todo-action">
                                                            @if($key->status==0)
                                               <a href="{{route('couple.completeToDoList',$key->id)}}" class="btn-circle" title="complete list">
                                         <i class="fa fa-check "></i></a>
                                         @else
                                          <a href="#" class="bg-success btn-circle" title="complete list">
                                         <i class="fa fa-check text-success"></i></a>
                                         @endif
                                             <a href="{{route('couple.editToDoList',$key->id)}}" class="btn-circle" title="Edit list">
                                         <i class="fa fa-edit"></i></a> 
                                         <a href="{{route('couple.toDoListDelete',$key->id)}}" class="btn-circle" title="Delete List" onclick="return confirm('Are you sure you are delete check  list')"><i class="fa fa-trash-o"></i></a>
                                          </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </li>
                                                @endforeach
                                                @endif

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-white pinside30 widget-todo">
                                        <h3>Summary of To Dos</h3>
                                        <div class="todo-percentage" data-percent="65"> </div>
                                        <div class="todo-value"> <span class="todo-done">{{$toDoListDone}} Done </span> <span class="todo-pending">{{$toDoListRemaining}} To-Dos </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
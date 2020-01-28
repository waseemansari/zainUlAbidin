Welcome {{ $name['userName'] }}
<br>
Mr /Ms {{ $name['name']}} send you message for a quetation
<br>
@if($name['status']==0 )
<a href="{{url('vendor')}}"  type="button" class="btn btn-primary">Accept Invition</a>
<a href="{{route('couple.rejectInvition',$name['id'])}}"  type="button" class="btn btn-success">Reject Invition</a>
@elseif($name['status']==1)
<a href="#" class="btn btn-success"> Invition Accepted</a>
@elseif($name['status']==2)
<a href="#" class="btn btn-danger"> Invition Rejected</a>
@endif

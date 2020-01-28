<?php

namespace App\Http\Controllers\Couple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ToDoList;
use Auth;
class ToDoListController extends Controller
{
     public function coupleChecklist(){
     	$toDoList = toDoList::paginate(20);
        $user = Auth::user()->id;
        $toDoListDone = toDoList::where('user_id',$user)->where('status',1)->count();
        $toDoListRemaining = toDoList::where('user_id',$user)->count();
    	return view('couple.toDoList.coupleChecklist',compact('toDoList','toDoListDone','toDoListRemaining'));

    }
    public function addToDoList(){
    	return view('couple.toDoList.create');
    }
    public function storeToDoList(Request $request){
    	$user = Auth::user()->id;
    	$param = $request->all();
    	$param['user_id']=$user;
    	ToDoList::create($param);
    	return back()->with('ToDoList','Request has been procced');
    }
    public function toDoListDelete($id){
            toDoList::findOrfail($id)->delete();
         return back()->with('ToDoListDelete','Request has been procced');
    }
    public function editToDoList($id){
          $toDoList = toDoList::findOrfail($id);
          return view('couple.toDoList.edit',compact('toDoList'));
    }
    public function updateToDoList(Request $request,$id){
        $user = Auth::user()->id;
        $param = $request->all();
        $param['user_id']=$user;
        ToDoList::findOrfail($id)->update($param);
        return back()->with('ToDoList','Request has been procced'); 
    }
    public function completeToDoList($id){
      ToDoList::findOrfail($id)->update(['status'=>1]);
      return back()->with('ToDoList','Request has been procced'); 
    }
}

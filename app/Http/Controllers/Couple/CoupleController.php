<?php

namespace App\Http\Controllers\Couple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\wishList;
use App\models\Price;
use App\models\Budget;
use App\models\Category;
use App\models\ListModel;
use App\models\imageList;
use App\models\GuestInvite;
use App\Mail\inviteGuest;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\models\toDoList;
use Mail;
use Auth;
use Hash;
use DB;
class CoupleController extends Controller
{
     public function coupleDashboard(){
       
        $auth  = Auth::user()->id;
        $authWedding = Auth::user()->wedding;
        $wedding  = date_create($authWedding);
        $today = date('y-m-d');
         $now = time(); // or your date as well 
        $your_date = strtotime($authWedding);
        $datediff = $your_date - $now;
        $dayCount = round($datediff / (60 * 60 * 24));
        $wedding = date_format($wedding,"l, d M Y");
        $toDoListDone = toDoList::where('user_id',$auth)->where('status',1)->count();
        $toDoListRemaining = toDoList::where('user_id',$auth)->count();
        $totalBudget = Budget::where('user_id',$auth)->sum('actualCost');
        $spendBudget = Budget::where('user_id',$auth)->sum('paidCost');
        $currency = Budget::where('user_id',$auth)->with('Price')->first();
        $wishList = wishList::where('user_id',$auth)->count();
        $inviteGuest = GuestInvite::where('user_id',$auth)->count();
        $inviteGuestAccept = GuestInvite::where('user_id',$auth)->where('invite',2)->count();
        $inviteGuestReject = GuestInvite::where('user_id',$auth)->where('invite',3)->count();
        $inviteGuestNotResponse = GuestInvite::where('user_id',$auth)->where('invite',1)->count();  
        return view('couple.coupleDashboard',compact('dayCount','spendBudget','totalBudget','wishList','toDoListRemaining','toDoListDone','currency','wedding','inviteGuest','inviteGuestAccept','inviteGuestReject','inviteGuestNotResponse'));
     }
     public function coupleProfile(){
    	return view('couple.coupleProfile');

    }
    public function addGuest(){
    	return view('couple.addGuest');
    }
    public function postGuest(Request $request){
    	$request->validate([
             'name'=>'required|min:2|max:255|string',
             'email'=>'required|min:2|max:255|email',
             'phone'=>'required', 
             'address'=>'required|min:2|max:255|string'
    	  ]);
          $param  = $request->all();
          $param['user_id'] =Auth::user()->id;
          GuestInvite::create($param);
          return back()->with('successMessage','Reguest has been processed');
    }
    public function coupleGuestlist(){
        $auth = Auth::user()->id;
        $guest = GuestInvite::where('user_id',$auth)->paginate(50);
    	return view('couple.coupleGuestlist',compact('guest'));
    }
    public function inviteGuest($id){
        $auth = Auth::user()->id;
    $guestDetail = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->first();
        $guest = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->update(['invite'=>1]);
        $name=[
           'name'=>$guestDetail->name,
           'status'=>$guestDetail->invite,
           'id'=>$guestDetail->id,
        ];
        Mail::to($guestDetail->email)->send(new inviteGuest($name));
    	return back()->with('successMessage','Reguest has been processed');
    }
    public function accepteInvition($id){
         $auth = Auth::user()->id;
        $guest = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->update(['invite'=>2]);
        return redirect('/')->with('successMessage','Reguest has been processed');
    }
    public function rejectInvition($id){
         $auth = Auth::user()->id;
        $guest = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->update(['invite'=>3]);
        return redirect('/')->with('successMessage','Reguest has been processed');
    }
    public function editGuest($id){
    	$auth = Auth::user()->id;
        $guest = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->firstOrfail();
    	return view('couple.editGuest',compact('guest'));
    }
     public function updateGuest(Request $request, $id){
     	$request->validate([
             'name'=>'required|min:2|max:255|string',
             'phone'=>'required', 
             'email'=>'required|min:2|max:255|email',
             'address'=>'required|min:2|max:255|string'
    	  ]);
     	$param = $request->all();
    	$auth = Auth::user()->id;
    	 $param['user_id'] =Auth::user()->id;
    	 $param = request()->except(['_token']);
        $guest = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->update($param);
    	 return back()->with('successMessage','Reguest has been processed');
    }
    
    public function deleteGuest($id){
    	$auth = Auth::user()->id;
        $guest = GuestInvite::where(['id'=>$id,'user_id'=>$auth])->delete();
    	return back()->with('successMessageDelete','Reguest has been processed');
    }
    public function coupleChangePassword(Request $request){
    	
       $request->validate([
            'oldpassword' => 'required|min:9',
            'newpassword' => 'required|min:9',
            'ConfirmPassword' => 'same:newpassword|min:9',
        ]);
        $id = auth()->user()->id;
        $oldPassword = $request->oldpassword;
        $newPassword = Hash::make($request->newpassword);
        $authPassword = auth()->user()->password;
        
        if (Hash::check($oldPassword , $authPassword)) {
           $user = User::whereId($id)->update(['password'=>$newPassword]);
           if($user){
             return back()->with('successMessage','Request has been procced!');
           }
           else{
             return back()->with('errorMessage','some thing wrong');
           }
          
        }
        else{
            return back()->with('errorMessage','Your old password is wrong');
        }    
    
    }
    public function coupleChangeAvatar(Request $request){
         $auth = Auth::user()->id;
         $fname = Auth::user()->name;
         $request->validate(['image'=>'required|mimes:jpeg,jpg,png,gif']);
         $path = Storage::putFile('couple', $request->file('image'));
         $user  = new User;
         $data =['images'=>$path];
         if($user->where('id',$auth)->update($data)){
            return back()->with('successMessageProfile','Profile image update successfully'); 
         }
         else
         {
            return back()->with('errorMessageProfile','Profile image update successfully');

         }
    }
    public function coupleChangeInfo(Request $request){
      $id = Auth::user()->id;
      $request->validate([
        'name'=>'required|max:255|string',
        'email'=>'required|email',
        'phone'=>'required',
       ]);
        $data = [
            'name'=>$request->name,
            'website'=>$request->website,
            'phone'=>$request->phone,
            'desc'=>$request->Description,
            'facebookURl'=>$request->Facebook,
            'twitterUrl'=>$request->Twitter,
            'linkedinUrl'=>$request->Linkedin,
            'pinterestUrl'=>$request->Pinterest

        ];
        $user = User::whereId($id)->update($data);
        if($user){
        return back()->with('successInfoMessage','Profile update successfully');

        }
        else
        {
          return back()->with('errorInfoMessage','Somme  is wrong');

        }

    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\models\city;
use App\models\ListModel;
use App\models\EnquiryVendor;
use App\Mail\sendQueryToVendor;
use App\models\Rating;
use Mail;
use App\User;
use Auth;
class PageTemplateController extends Controller
{
    public function welcome(){
        $categorey = Category::get(['id','title']);
        $city = city::get(['id','title']);
        return view('welcome',compact('categorey','city'));
    }
    public function addRating(Request $request, $id){
      if(Auth::check())
      {
        $auth = Auth::user()->id;
          $param = $request->all();
          $param['user_id'] = $id;
          $param['ListModel_id'] = $auth;
          
          $request->validate([
              'name'=>'required',
              'rating'=>'required',
              'description'=>'required'
          ]);
          $rating = Rating::create($param);
          if($rating)
          {
          return back()->with('successMessage','Request has been procced');
          }
          else{
          return back()->with('errorMessage','Request has been not procced');

          }
      }
      else
      { 
        return back()->with('errorMessage','Please Login before your rating');
      }
    }
    public  function sendQuery(Request $request,$id){

           $param = $request->all();
           $userId = ListModel::whereId($id)->value('user_id');
           $email = User::whereId($userId)->value('email');
           $userName = User::whereId($userId)->value('name');
       
           $param['user_id'] = $userId;
           $param['ListModel_id'] = $id;
           $request->validate([
                'name'=>'required|string|min:5:max:255',
                'phone'=>'required|numeric',
                'email'=>'required|email',
                'weddingDate'=>'required|date',
                'guestNumber_id'=>'required',
                'sendQueryVia'=>'required',
            ]);
    
         $query =  EnquiryVendor::create($param);
        $name=[
           'name'=>$query->name,
           'status'=>$query->status,
           'id'=>$query->id,
           'userName'=>$userName
        ];
        Mail::to($email)->send(new sendQueryToVendor($name));
      return back()->with('message','Request has been procced');
    }
    public function searchVenu(Request $request){
          if(isset($request->city)){
            $cityDecrypt = decrypt($request->city);
          }
          else{
             $cityDecrypt = 0;
          }
           if(isset($request->venu)){
           $venu = decrypt($request->venu);
            $categorey = Category::whereId($venu)->firstOrFail();
          }
          else{
            $venu = 0;
             $categorey = Category::first();
          }
           $categoreySideBar = Category::get(['id','title']);
           $city = city::get(['id','title']);
          
           $listCount = ListModel::where('city',$cityDecrypt)->orwhere('category',$venu)->with('imageList','price','Seat')->count();
           $list = ListModel::where('city',$cityDecrypt)->orwhere('category',$venu)->with('imageList','price','Seat')->paginate(20);
            return view('categoryPage.supplier',compact('city','categoreySideBar','categorey','list','listCount'));
    }
    public function help(){
    	return view('pageTemplate.help');
    }
    public function price(){
    	return view('pageTemplate.price');
    }
    public function signupCouple(){
    	return view('pageTemplate.signupCouple');
    }
    public function signupVendor(){
    	return view('pageTemplate.signupVendor');
    }
    public function loginPage(){
        return view('pageTemplate.loginPage');
    }
    public function  aboutUs(){
        return view('pageTemplate.aboutUs');
    }
     public function  contactUs(){
        return view('pageTemplate.contactUs');
    }
    public function  realWeddingSingle(){
        return view('pageTemplate.realWeddingSingle');
    }
    public function  realWeddingListing(){
        return view('pageTemplate.realWeddingListing');
    }
    public function  venueListing(){
        return view('pageTemplate.venueListing');
    }
    public function  photographyListing(){
        return view('pageTemplate.photographyListing');
    }
    public function  dressesListing(){
        return view('pageTemplate.dressesListing');
    }
    public function  floristListing(){
        return view('pageTemplate.floristListing');
    }
    public function  videographyListing(){
        return view('pageTemplate.videographyListing');
    }
    public function  cakeListing(){
        return view('pageTemplate.cakeListing');
    }
    public function  musicListing(){
        return view('pageTemplate.musicListing');
    }
    
    
    
}

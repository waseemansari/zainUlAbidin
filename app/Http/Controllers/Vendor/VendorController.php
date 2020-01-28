<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\models\Country;
use App\models\Price;
use App\models\Seat;
use App\models\ListModel;
use App\User;
use App\models\EnquiryVendor;
use Illuminate\Support\Facades\Storage;
use Auth;
use Hash;
class VendorController extends Controller
{
    public function index(){
        $auth = Auth::user()->id;
        $order = EnquiryVendor::where('user_id',$auth)->paginate(50);
        return view('vendor.dashboardVendor',compact('order'));
    } 
    public function acceptOffer($id){
      $order = EnquiryVendor::findOrfail($id)->update(['status'=>1]);
      if($order){
        return back()->with('successMessage','Request has been procced');
      }
      else
      {
       return back()->with('errorMessage','Request has been procced');
       }
      
    }
     public function rejectOffer($id){
      $order = EnquiryVendor::findOrfail($id)->update(['status'=>2]);
      if($order){
        return back()->with('successMessage','Request has been procced');
      }
      else
      {
       return back()->with('errorMessage','Request has been procced');
       }
    }
    
    public function vendorProfile(){
    	return view('vendor.vendorProfile');
    }
    public function viewList($id){
            echo $id;
    }
    public function vendorListing(){
        $auth = Auth::user()->id;
       $list = ListModel::where('user_id',$auth)->orderBy('created_at','DESC')->with('imageList','Price')->paginate(10);
    	return view('vendor.vendorListing',compact('list'));
    }
    public function vendorAddListing($count=0){
        if($count > 0 ){
           $modelList = ListModel::whereId($count)->with('price','category','Seat','Country')->first();
            $category = Category::where('id','!=',$modelList->category)->get(['id','title']);
            $country = Country::where('id','!=',$modelList->country)->get(['id','title']);
            $price = Price::where('id','!=',$modelList->price_id)->get(['id','title','sign']);
            $seat = Seat::where('id','!=',$modelList->seat)->get(['id','title']); 
        }
        else
        {
            $modelList=  "";
            $category = Category::get(['id','title']);
            $country = Country::get(['id','title']);
            $price = Price::get(['id','title','sign']);
            $seat = Seat::get(['id','title']);  
        }
       
    	return view('vendor.vendorAddListing',compact('modelList','count','category','country','price','seat'));
    }
    public function vendorPricing(){
    	return view('vendor.vendorPricing');
    }
    public function changePassword(Request $request){
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
    public function changeInfo(Request $request){
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
    public function changeAvatar(Request $request){

         $auth = Auth::user()->id;
         $fname = Auth::user()->name;
         $request->validate(['image'=>'required|mimes:jpeg,jpg,png,gif']);
         $path = Storage::putFile('avatars', $request->file('image'));
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
    public function destroy($id){
           $delete = ListModel::whereId($id)->delete();
           if($delete){
        return back()->with('successVendorDelete','Vendor delete  successfully');

        }
        else
        {
          return back()->with('errorVendorDelete','Somme  is wrong');

        }
    }
    public function vendorDetails($id){
         $listModel = ListModel::whereId($id)->with('imageListMany','price','Seat','User')->first(); 
      return view('vendor.vendorDetail',compact('listModel'));
    }
    
    
}





 
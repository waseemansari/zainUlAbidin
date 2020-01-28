<?php

namespace App\Http\Controllers\Planning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\wishList;
use App\models\Price;
use App\models\Budget;
use App\models\Category;
use App\models\ListModel;
use App\models\imageList;
use App\models\GuestInvite;
use Auth;
use DB;
class PlanningController extends Controller
{
    public function wishList($modelId){
        
        $check = Auth::check();
        if($check){
             $auth = Auth::user()->id;
            $wishlistCehck = wishlist::where(['user_id'=>$auth,'ListModel_id'=>$modelId])->count();
            if($wishlistCehck > 0 ){
                return back()->with('messageWishlist','your are already wish list this item successfully');
            }
            else{
                $product = ListModel::whereId($modelId)->first();
                $wishlist = new wishList;
                $wishlist->user_id = $auth;
                $wishlist->ListModel_id = $modelId;
                $wishlist->heading = $product->heading;
                $wishlist->address = $product->address;
                $wishlist->country = $product->country;
                $wishlist->city = $product->city;
                $wishlist->category = $product->category;
                $wishlist->description = $product->description;
                $wishlist->seat = $product->seat;
                $wishlist->price_id = $product->price_id;
                $wishlist->latitude = $product->latitude;
                $wishlist->longitude = $product->longitude;
                $wishlist->status = $product->status;
                $wishlist->save();
                return back()->with('messageWishlist','Item add your wish list successfully'); 
            }
           
         }
        else
        {
            return back()->with('messageWishlistError','Before add to with list please login'); 
        }
    }
    public function planningToDo(){
    	return view('planning.planningToDo');

    }
    public function planningBudget(){
    	return view('planning.planningBudget');

    }
    public function coupleLandingPage(){
    	return view('couple.coupleLandingPage');
    }
   
    public function coupleWishlist(){
         $auth = Auth::user()->id;
         $wishlist = wishList::where(['user_id'=>$auth])->with('Seat','city','Country','category','price','imageList')->get();
    	return view('couple.coupleWishlist',compact('wishlist'));

    }
    public function coupleBudgett(){
        $auth = Auth::user()->id;
        $budget = Budget::where('user_id',$auth)->with('Price')->paginate(20);
    	return view('couple.coupleBudgett',compact('budget'));

    }
    
    
   
    public function addBudget(){
        $sign = Price::all(['id','sign']);
        return view('couple.addBudget',compact('sign'));

    }
    public function postBudget(Request $request){
        $request->validate([
              'budget'=>'required|string',
              'currency'=>'required|numeric',
              'estimatedCost'=>'required|numeric',
              'actualCost'=>'required|numeric',
               'paidCost'=>'required|numeric',
        ]);
       $param = $request->all();
       $param['user_id']=  Auth::user()->id;
       Budget::create($param);
       return redirect('/couple_budgett')->with('successMessage','Request has been proccessed');
    }
    public function deleteBudget($id){
        Budget::findOrfail($id)->delete();
       return back()->with('successMessageDelete','Item delete successfully');
    }
    public function editBudget($id){
         $budget = Budget::findOrfail($id);
         $sign = Price::all(['id','sign']);
         return view('couple.editBudget',compact('sign','budget'));
    }
    public function updateBudget(Request $request,$id){
        $request->validate([
              'budget'=>'required|string',
              'currency'=>'required|numeric',
              'estimatedCost'=>'required|numeric',
              'actualCost'=>'required|numeric',
               'paidCost'=>'required|numeric',
        ]);
       $param = $request->all();
       $param['user_id']=  Auth::user()->id;
       Budget::findOrfail($id)->update($param);
       return redirect('/couple_budgett')->with('successMessage','Request has been proccessed');
    }
    public function removeWishList($id,$user){
        wishList::findOrfail($id)->delete();
       return back()->with('successMessageDelete','Item delete successfully');
    }
    
    
    
}

<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\models\ListModel;
use App\models\imageList;
use Input;
use Auth;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $param = $request->all(); 
       $category = Category::whereId($request->category)->value('title');
       $auth = Auth::user()->id;
       $fname = Auth::user()->name;
       $date=  date('Y-m-d');
        $param['status']=1;
        $param['user_id']=$auth;
        $request->validate([
            'heading'=>'required|string|min:5:max:255',
            'address'=>'required|string|min:5|max:255',
            'country'=>'required',
            'city'=>'required',
            'price_id'=>'required',
            'category'=>'required',
            'seat'=>'required',
            'image1'=>'required|mimes:jpeg,jpg,png,gif',
            'image2'=>'required|mimes:jpeg,jpg,png,gif',
            'image3'=>'required|mimes:jpeg,jpg,png,gif',
            'image4'=>'required|mimes:jpeg,jpg,png,gif',
        ]);
          
           $list = ListModel::create($param);
           //////////////////////////
          $image1 = $request->file('image1')->store($category);
          $image2 = $request->file('image2')->store($category);
          $image3 = $request->file('image3')->store($category);
          $image4 = $request->file('image4')->store($category);
          /////////////////////////////
          $image = new imageList;
          $image->image = $image1;
          $image->ListModel_id = $list->id;
          $image->save();
          //////////////////////////
          /////////////////////////////
          $image = new imageList;
          $image->image = $image2;
          $image->ListModel_id = $list->id;
          $image->save();
          
          //////////////////////////
          /////////////////////////////
          $image = new imageList;
          $image->image = $image3;
          $image->ListModel_id = $list->id;
          $image->save();
          
          //////////////////////////
          /////////////////////////////
          $image = new imageList;
          $image->image = $image4;
          $image->ListModel_id = $list->id;
          $image->save();
          
          //////////////////////////
          if ($list) {
            return redirect('/vendor/vendor_listing')->with('successMessage','Request has been proccessed'); 
          }
          else{
            return back()->with('errorMessage','some thing is wrong ');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $param = $request->all(); 
       $param = $request->except('_token');
       $category = Category::whereId($request->category)->value('title');
       $auth = Auth::user()->id;
       $fname = Auth::user()->name;
       $date=  date('Y-m-d');
        $param['status']=1;
        $param['user_id']=$auth;
        $request->validate([
            'heading'=>'required|string|min:5:max:255',
            'address'=>'required|string|min:5|max:255',
            'image'=>'mimes:jpeg,jpg,png,gif',
            'country'=>'required',
            'city'=>'required',
            'price_id'=>'required',
            'category'=>'required',
            'seat'=>'required',
        ]);
          
          //////////////////////////
        if ($request->hasFile('image')) {
          $path = $request->file('image')->storeAs($category,$fname."_".$auth."_".$date);
          $param['image']=$path;
          //////////////////////////
         }
          $list = ListModel::whereId($id)->update($param);
          if ($list) {
            return redirect('/vendor/vendor_listing')->with('successMessage','Request has been proccessed'); 
          }
          else{
            return back()->with('errorMessage','some thing is wrong ');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }
}

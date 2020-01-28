<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\models\city;
use App\models\ListModel;

class CategoryController extends Controller
{
    public function supplier($cate){
             $cate = decrypt($cate);
             $categoreySideBar = Category::get(['id','title']);
           $city = city::get(['id','title']);
    	    $categorey = Category::whereId($cate)->firstOrFail();
             $list = ListModel::where('category',$cate)->with('imageList','price','Seat')->paginate(20);
            $listCount = ListModel::where('category',$cate)->with('imageList','price','Seat')->count();
       return view('categoryPage.supplier',compact('categoreySideBar','city','categorey','list','listCount'));
    	}
    public function findCity($country){
    	$city = city::where('country_id',$country)->get(['id','title']);
    	foreach ($city as $key) {
    		echo $data = "<option value=".$key->id.">".$key->title."</option>";
    	}
    }
}

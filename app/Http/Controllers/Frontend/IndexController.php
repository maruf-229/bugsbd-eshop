<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $sliders=Slider::orderBy('id','DESC')->limit(3)->get();
        $products=DB::table('products')->limit(8)->get();
        return view('frontend.index',compact('sliders','products'));
    }

    public function itemDetails($id){
        $product=DB::table('products')->where('id',$id)->first();
        return view('frontend.item.item_details',compact('product'));
    }
}

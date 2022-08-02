<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Product;
use Illuminate\Support\Str;
use DB;
use Image;
class ProductController extends Controller
{
    public function index()
    {
        $products=DB::table('products')
        ->join('categories','products.cat_id','categories.id')
        ->select('products.*','categories.category_name')
        ->get();
        return view('backend.product.manage',compact('products'));
    }

    public function sliderStatus(Request $request){
        if($request->mode == 'true'){
            $status = DB::table('sliders')->where('id',$request->id)->update(['active'=>1]);
        }else{
            $status = DB::table('sliders')->where('id',$request->id)->update(['active'=>0]);
        }
        if ($status) {
            $notification = array(
                'message' => 'sliders Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
                'message' => 'sliders Change Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        } 
        
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
      

        $image=$request->file('image');
        if($image){
            $image_upload= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(150,150)->save('Slider/Image/'.$image_upload);
            $imgUrl ='Slider/Image/'.$image_upload;
            $Product = new Product(); 
            $Product->image = $imgUrl; 
            $Product->title = $request->title;
            $Product->sammary = $request->sammary;
            $Product->description = $request->description;
            $Product->cat_id = $request->cat_id;
            $Product->bid_price = $request->bid_price;
            $Product->active = $request->active;
            $done = $Product->save();
        }else{
            $Product = new Product();
            $Product->title = $request->title;
            $Product->sammary = $request->sammary;
            $Product->description = $request->description;
            $Product->cat_id = $request->cat_id;
            $Product->bid_price = $request->bid_price;
            $Product->active = $request->active;
            $done = $Product->save();
        }
        if ($done) {
            $notification = array(
                'message' => 'Product Added Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Product Added Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
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
        $Slider = Slider::find($id);
        if($Slider){
            $image=$request->file('image');
            if($image){
                $image_upload= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(150,150)->save('Slider/Image/'.$image_upload);
                $imgUrl ='Slider/Image/'.$image_upload;

                $Slider->image = $imgUrl;  
                $Slider->title_first = $request->title_first;
                $Slider->title_second = $request->title_second;
                $Slider->title_third = $request->title_third;
                $Slider->sub_title = $request->sub_title;
                $Slider->active = $request->active;
                $done = $Slider->save();
                if ($done) {
                    $notification = array(
                        'message' => 'Slider Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Slider Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }else{
                $Slider->title_first = $request->title_first;
                $Slider->title_second = $request->title_second;
                $Slider->title_third = $request->title_third;
                $Slider->sub_title = $request->sub_title;
                $Slider->active = $request->active;
                $done = $Slider->save();
                if ($done) {
                    $notification = array(
                        'message' => 'Slider Update Successfully.',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'message' => 'Slider Update Unuccessfully',
                        'alert-type' => 'danger'
                    );
                    return redirect()->back()->with($notification);
                }
            }
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
        $Slider = Slider::find($id);
        if($Slider){
            $status = $Slider->delete();
            if ($status) {
                $notification = array(
                    'message' => 'Slider Delete Successfully.',
                    'alert-type' => 'success'
                );
                return redirect()->route('slider.index')->with($notification);
            }
        }else{
            $notification = array(
                'message' => 'Slider Delete Unsuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }
    }
}

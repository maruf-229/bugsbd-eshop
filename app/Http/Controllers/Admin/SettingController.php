<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;
use Illuminate\Support\Str;
use DB;
use Image;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        return view('backend.setting.update',compact('setting'));
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
        //
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
    {   $Setting = Setting::find($id);
        if($Setting){
            $image=$request->file('logo');
            if($image){
                $image_upload= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(150,150)->save('Slider/Logo/'.$image_upload);
                $imgUrl ='Slider/Logo/'.$image_upload;
                $Setting->logo = $imgUrl; 
                $Setting->title = $request->title;
                $Setting->address = $request->address;
                $Setting->email = $request->email;
                $Setting->phone = $request->phone;
                $Setting->footer = $request->footer; 
                $Setting->facebook_url = $request->facebook_url; 
                $Setting->twitter_url = $request->twitter_url; 
                $Setting->linkedin_url = $request->linkedin_url; 
                $Setting->youtube_url = $request->youtube_url; 
                $done = $Setting->save();
            }else{
                $Setting->title = $request->title;
                $Setting->address = $request->address;
                $Setting->email = $request->email;
                $Setting->phone = $request->phone;
                $Setting->footer = $request->footer; 
                $Setting->facebook_url = $request->facebook_url; 
                $Setting->twitter_url = $request->twitter_url; 
                $Setting->linkedin_url = $request->linkedin_url; 
                $Setting->youtube_url = $request->youtube_url; 
                $done = $Setting->save(); 
            }
            if ($done) {
                $notification = array(
                    'message' => 'Setting Update Successfully.',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'message' => 'Setting Update Unuccessfully',
                    'alert-type' => 'danger'
                );
                return redirect()->back()->with($notification);
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
        //
    }
}

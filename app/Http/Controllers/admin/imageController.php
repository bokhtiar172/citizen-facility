<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\image;
use Illuminate\Support\Str;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $all_image=image::latest()->get();
        return view('admin.image.show',compact('all_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallary=new image;
          $gallary['name']=$request->name;


                  $image=$request->file('image');
                       if ($image){

                         $image_name=Str::random(20);
                         $ext=strtolower($image->getClientOriginalExtension());
                         $image_full_name=$image_name.'.'.$ext;
                         $upload_path='image/';
                         $image_url=$upload_path.$image_full_name;
                         $success=$image->move($upload_path,$image_full_name);
                             if ($success) {
                             $gallary['image']=$image_url;

                                           }
                                }
          $gallary->save();
          return back();
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
        $edit=image::find($id);
        return view('admin.image.edit',compact('edit'));
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
      $gallary_update=image::find($id);
        $gallary_update['name']=$request->name;


                $image=$request->file('image');
                     if ($image){

                       $image_name=Str::random(20);
                       $ext=strtolower($image->getClientOriginalExtension());
                       $image_full_name=$image_name.'.'.$ext;
                       $upload_path='image/';
                       $image_url=$upload_path.$image_full_name;
                       $success=$image->move($upload_path,$image_full_name);
                           if ($success) {
                           $gallary_update['image']=$image_url;

                                         }
                              }
        $gallary_update->save();
        return redirect('admin/image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=image::find($id);
        $delete->delete();
        return back();
    }
}

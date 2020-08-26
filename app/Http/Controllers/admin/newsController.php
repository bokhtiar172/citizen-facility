<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;
use Illuminate\Support\Str;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_newss=news::latest()->get();
        return view('admin/news/show',compact('all_newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/news/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $all_news=new news;
        $all_news['division_id']=$request->division_id;
        $all_news['title']=$request->title;
        $all_news['short_des']=$request->short_des;
        $all_news['long_des']=$request->long_des;





        $image=$request->file('image');
             if ($image){

               $image_name=Str::random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                   if ($success) {
                   $all_news['image']=$image_url;

                                 }
                      }

        $all_news->save();
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
        $edit=news::find($id);
        return view('admin.news.edit',compact('edit'));
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
      $update_news=news::find($id);
        $update_news['division_id']=$request->division_id;
        $update_news['title']=$request->title;
        $update_news['short_des']=$request->short_des;
        $update_news['long_des']=$request->long_des;





        $image=$request->file('image');
             if ($image){

               $image_name=Str::random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                   if ($success) {
                   $update_news['image']=$image_url;

                                 }
                      }

        $update_news->save();
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_news=news::find($id);
        $delete_news->delete();
        return back();
    }


    public function active($id){
        $active=news::find($id);
        $active['status']=1;
        $active->save();
        return back();
    }


    public function inactive($id){
        $inactive=news::find($id);
        $inactive['status']=0;
        $inactive->save();
        return back();
    }
}

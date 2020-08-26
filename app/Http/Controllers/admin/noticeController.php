<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\division;
use App\district;
use App\User;
use App\userGetTran;
use App\notice;
use Illuminate\Support\Str;
use App\Mail\govt;
use Illuminate\Support\Facades\Mail;

class noticeController extends Controller
{
    public function select_location(){
      return view('admin.notice.location');
    }

    public function find_location(Request $request){


          $user=User::where('role_id',3)
                      ->where('division',$request->division_id)
                      ->where('district',$request->district_id)
                      ->where('status',1)
                      ->get();
          return view('admin.notice.user',compact('user'));




    }


    public function store($id){
      $user_store=new userGetTran;
        $user_store['user_id']=$id;

        foreach (notice::all() as $v_notice) {
            $user_store['post_id']=$v_notice->id;
            $v_notice->save();
        }

      $user_store->save();
      return back();
    }


    public function notice_form(){
      return view('admin.notice.notice_form');
    }

    public function notice_store(Request $request){
      $notice=new notice;
        $notice['name']=$request->name;
        $notice['email']=$request->email;
        $notice['phone']=$request->phone;
        $notice['location']=$request->location;
        $notice['division_id']=$request->division_id;
        $notice['district_id']=$request->district_id;
        $notice['amount']=$request->amount;
        $notice['item']=$request->item;


                          $image=$request->file('image');
                               if ($image){

                                 $image_name=Str::random(20);
                                 $ext=strtolower($image->getClientOriginalExtension());
                                 $image_full_name=$image_name.'.'.$ext;
                                 $upload_path='image/';
                                 $image_url=$upload_path.$image_full_name;
                                 $success=$image->move($upload_path,$image_full_name);
                                     if ($success) {
                                     $notice['image']=$image_url;

                                                   }
                                        }

        $notice->save();
        Mail::to($request['email'])->send(new govt($notice));

        return redirect('admin/notice/location');

    }


}

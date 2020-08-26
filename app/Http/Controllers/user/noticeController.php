<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\notice;
use App\division;
use App\userGetTran;

class noticeController extends Controller
{
    public function get_division($id){
      $division=notice::where('division_id',$id)->where('status',0)->get();
      return view('user.division_details',compact('division'));
    }

    public function get_relife($id){
      $user_get=userGetTran::find($id);
      $user_get['status']=1;
      $user_get->save();
      return back();
    }
}

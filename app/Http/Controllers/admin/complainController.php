<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\complain;
use App\comaplinReply;
use Auth;
class complainController extends Controller
{
  public function all_complain(){
    $complain=complain::latest()->get();
    return view('admin.complain.show',compact('complain'));
  }

  public function view_complain($id){
    $single_view=complain::find($id);
    return view('admin.complain.single_view',compact('single_view'));
  }

  public function store(Request $request){
    $complain_reply=new comaplinReply;
    $complain_reply['admin_id']=Auth::id();
    $complain_reply['user_id']=$request->user_id;
    $complain_reply['comment']=$request->comment;



    $complain_reply->save();
    return redirect('admin/complain/all-complain');

  }

}

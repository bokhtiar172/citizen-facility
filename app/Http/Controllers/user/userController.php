<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\complain;


class userController extends Controller
{
  public function index(){
    return view('user.index');
  }

  public function logout(){
    Auth::logout();
    return redirect()->route('login');
  }

  public function about(){
    return view('user.about');
  }

  public function contact(){
    return view('user.contact');
  }

  public function Compalin(Request $request){
    $complain=new complain;
      $complain['user_id']=Auth::id();
      $complain['comment']=$request->comment;
    $complain->save();
    return redirect()->back();

  }
}

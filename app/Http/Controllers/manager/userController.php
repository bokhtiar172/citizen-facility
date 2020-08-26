<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    public function nonauthorize(){
      return view('manager.notConfirmUser');
    }

    public function single_user($id){
      $user=User::find($id);
      return view('manager.user_profile',compact('user'));
    }

    public function single_confirm($id){
      $user_confrim=User::find($id);
      $user_confrim['status']=1;
      $user_confrim->save();
      return view('manager.notConfirmUser');
    }


    public function register_user(){
      return view('manager.confirmUser');
    }




}

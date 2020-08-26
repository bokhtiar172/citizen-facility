<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\notice;

class facilityController extends Controller
{
    public function index(){
      return view('user.facility');
    }

    public function view_tran($id){
      $notice=notice::find($id);
      return view('user.notice_single_view',compact('notice'));
    }
}

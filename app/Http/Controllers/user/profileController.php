<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
      public function profile(){
        return view('user.profile');
      }
}

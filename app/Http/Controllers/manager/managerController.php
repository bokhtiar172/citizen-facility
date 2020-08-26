<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class managerController extends Controller
{
  public function index(){
    return view('manager.index');
  }

  public function logout(){
    Auth::logout();
    return redirect()->route('login');
  }
}

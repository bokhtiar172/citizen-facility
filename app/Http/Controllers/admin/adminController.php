<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class adminController extends Controller
{
    public function index(){
      return view('admin.index');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('login');
    }
}

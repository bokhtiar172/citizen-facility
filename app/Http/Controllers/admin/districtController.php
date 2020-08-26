<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\district;
use App\division;

class districtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_district=district::latest()->get();
        return view('admin.district.show',compact('all_district'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_division=division::latest()->get();
        return view('admin.district.add',compact('all_division'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $district=new district;
          $district['division_id']=$request->division_id;
          $district['district_name']=$request->district_name;
        $district->save();
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
      $all_division=division::latest()->get();
        $edit=district::find($id);
        return view('admin.district.edit',compact('edit','all_division'));
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
      $update_district=district::find($id);
        $update_district['division_id']=$request->division_id;
        $update_district['district_name']=$request->district_name;
      $update_district->save();
      return redirect('admin/district');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_district=district::find($id);
        $delete_district->delete();
        return back();
    }


    public function active($id){
        $active=district::find($id);
        $active['district_status']=1;
        $active->save();
        return back();
    }


    public function inactive($id){
        $inactive=district::find($id);
        $inactive['district_status']=0;
        $inactive->save();
        return back();
    }
}

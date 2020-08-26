@extends('manager_dashboard')
@section('manager_content')



              <div class="row">


                <div class="col-md-3 ">
                  <div class="card bg-success"style="height: 140px; line-height: 140px;" >
                    <?php
                      $all_user=App\User::where('role_id',3)->where('status',1)->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i><span class="ml-1 font-weight-bold text-light">TOTAL USER: {{$all_user}} </span>  </span>
                  </div>
                </div><!--end of col-->


                <div class="col-md-3">
                  <div class="card bg-info"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_pnd=App\User::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i><span ></span><span class="ml-1 font-weight-bold"> TOTAL PENDING USER: {{$all_pnd}} </span>
                  </div>
                </div><!--end of col-->


                <div class="col-md-3">
                  <div class="card bg-info"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_notice=App\notice::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i><span ></span><span class="ml-1 font-weight-bold"> TOTAL NOTICE: {{$all_notice}} </span>
                  </div>
                </div><!--end of col-->



                <div class="col-md-3">
                  <div class="card bg-warning"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_reg=App\User::where('role_id',3)->where('status',1)->count();
                     ?>
                    <span class="text-light font-weight-bold"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i> TOTAL REGSITER USER: {{$all_reg}} </span>
                  </div>
                </div><!--end of col-->


              </div><!-- end of part1 in dashbord-->

              <!-- order table stat-->


                        <!-- start all order show in database -->

                        <!-- end all order show in database -->
                        <!-- navbar for searc admin order table end -->


@endsection

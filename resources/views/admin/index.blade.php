@extends('admin_dashboard')
@section('admin_content')




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
                      $all_news=App\news::where('status',1)->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i><span ></span><span class="ml-1 font-weight-bold"> TOTAL NEWS: {{$all_news}} </span>
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
                      $all_cmp=App\complain::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i> TOTAL COMPLAIN: {{$all_cmp}} </span>
                  </div>
                </div><!--end of col-->


                <div class="col-md-3 mt-4">
                  <div class="card bg-primary"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_dis=App\district::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i>TOTAL DISTRICT:{{$all_dis}}</span>
                  </div>
                </div><!--end of col-->


                <div class="col-md-3 mt-4">
                  <div class="card bg-success"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_dvs=App\division::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i>TOTAL DIVISION:{{$all_dvs}}</span>
                  </div>
                </div><!--end of col-->



                <div class="col-md-3 mt-4">
                  <div class="card bg-secondary"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_img=App\image::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i>TOTAL IMAGE:{{$all_img}}</span>
                  </div>
                </div><!--end of col-->



                <div class="col-md-3 mt-4">
                  <div class="card bg-danger"style="height: 140px; line-height: 140px;">
                    <?php
                      $all_hlp=App\userGetTran::all()->count();
                     ?>
                    <span class="text-light"  style="margin-left: 20%; color: black;"><i class="fas fa-shopping-cart"></i>TOTAL HELP:{{$all_hlp}}</span>
                  </div>
                </div><!--end of col-->




              </div><!-- end of part1 in dashbord-->

              <!-- order table stat-->
                  <div class="mt-2">
                    <div class="row">
                      <div class="col-md-9">
                        <!-- navbar for searc admin order table start -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">User Complain</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline my-2 my-lg-0 ml-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        </div>
                        </nav>

                        <!-- start all order show in database -->

                        <!-- end all order show in database -->
                        <!-- navbar for searc admin order table end -->
                        <div class="card-body text-dark">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Cmp Sl</th>
                              <th>User_id</th>
                              <th>Complain</th>
                              <th>Status</th>
                              <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                              @foreach(App\complain::all() as $v_complain)
                                <tr>
                                  <td>{{$loop->index +1}}</td>
                                  <td>{{$v_complain->user->name}}</td>
                                  <td>{{$v_complain->comment}}</td>
                                  <td>
                                    @if($v_complain->status==1)
                                    <span class="bg-success text-light " href="{{url('admin/view-complain/'.$v_complain->id)}}">seen</span>&nbsp;&nbsp;
                                    @else
                                    <span class="bg-danger text-light " href="{{url('admin/view-complain/'.$v_complain->id)}}">not seen</span>&nbsp;&nbsp;
                                    @endif
                                  </td>
                                  <td>




                                    <a class="text-info h5" href="{{url('admin/complain/view-complain/'.$v_complain->id)}}">view</a>&nbsp;&nbsp;


                                    <form  class="" action="{{url('admin/district/'.$v_complain->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button style="border: none "  type="submit" name="button_delete">
                                        <i class="far fa-trash-alt"></i>
                                      <button>
                                    </form>

                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="bg-secondary">
                          <div class="card  text-light" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title text-dark">Other's Country</h5>
                            <img class="card-img-top" height="110px;" src="stat.png" alt="Card image cap">
                            <p class="card-text text-center"><b>34534Taka</b> </p>

                          </div>
                        </div>
                        </div>

                    <div class="card" style="width: 18rem;">
                      <h5 class="card-title">Product Sell</h5>
                    <div class="progress">
                      <div class="progress-bar mt-1" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar mt-1" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar mt-1" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar mt-1" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">99%</div>
                    </div>
                        </div>
                      </div>
                    </div>
                  </div>

@endsection

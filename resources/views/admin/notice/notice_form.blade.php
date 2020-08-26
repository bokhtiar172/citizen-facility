@extends('admin_dashboard')
@section('admin_content')

              <!-- main content -->


                        <div class="  card text-dark">
                            <div class="card-header">
                              <a class="float-right btn btn-success" href="{{url('admin/news')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View All Notice</a>
                              <h3 class="card-title font-weight-bold">Trans Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="row justify-content-center card-body">
                              <div class="col-md-10 class="form-control"">

                                    <form role="form" method="POST" action="{{url('admin/notice/store-notice')}}" enctype="multipart/form-data">
                                      @csrf



                                      <div class="row">

                                        <div class="col-md-6">
                                          <legend>GOVT PEOPLE INFO</legend>
                                          <div class="form-gorup">
                                            <label for="">Select Image</label>
                                            <input class="form-control" type="file" name="image" value="">
                                          </div>

                                          <div class="form-gorup">
                                            <label for="">Enter Name</label>
                                            <input class="form-control" type="text" name="name" value="">
                                          </div>


                                          <div class="form-gorup">
                                            <label for="">Enter phone</label>
                                            <input class="form-control" type="text" name="phone" value="">
                                          </div>


                                          <div class="form-gorup">
                                            <label for="">Enter location</label>
                                            <input class="form-control" type="text" name="location" value="">
                                          </div>


                                          <div class="form-gorup">
                                            <label for="">Enter Email</label>
                                            <input class="form-control" type="email" name="email" value="">
                                          </div>
                                        </div><!-- mp info -->


                                        <div class="col-md-6">
                                          <legend>LOCATION SELECT</legend>
                                          <div class="form-group">
                                            <label for="">Select Division</label>
                                              <select class="form-control" name="division_id">
                                                @foreach(App\division::all() as $v_division)
                                                <option value="{{$v_division->id}}">{{$v_division->division_name}}</option>
                                                @endforeach
                                              </select>
                                          </div><!--end of division-->

                                          <div class="form-group">
                                            <label for="">Select District</label>
                                              <select class="form-control" name="district_id">
                                                @foreach(App\district::all() as $v_dis)
                                                <option value="{{$v_dis->id}}">{{$v_dis->district_name}}</option>
                                                @endforeach
                                              </select>
                                          </div><!--end of district-->

                                          <div class="form-group">
                                            <label for="">Enter Amount</label>
                                            <input class="form-control" type="text" name="amount" value="">
                                          </div>


                                        </div><!-- location info -->

                                      </div><br>

                                      <div class="form-group">
                                        <label for="">Enter Tran Item's</label>
                                        <textarea name="item" placeholder="Tran item's"  class="form-control" rows="8" cols="80"></textarea>
                                      </div>













                                      <div class="form-group float-right">
                                        <button
                                        class="btn btn-info"
                                        type="submit"
                                        name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add News</button>
                                      </div>

                                    </form>

                              </div>
                            </div>
                            </div>


              <!-- main content end -->

@endsection

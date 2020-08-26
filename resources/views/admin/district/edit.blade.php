@extends('admin_dashboard')
@section('admin_content')

              <!-- main content -->


                        <div class="  card text-dark">
                            <div class="card-header">
                              <a class="float-right btn btn-success" href="{{url('admin/district')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View All District</a>
                              <h3 class="card-title font-weight-bold">District Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="row justify-content-center card-body">
                              <div class="col-md-6">

                                    <form role="form" method="POST" action="{{url('admin/district/'.$edit->id)}}" enctype="multipart/form-data">
                                      @csrf
                                      @method('put')



                                      <div class="form-group">
                                        <label for="">Select Division</label>
                                        <select class="form-control" name="division_id">
                                          @foreach($all_division as $v_division)
                                          <option value="{{$v_division->id}}">{{$v_division->division_name}}</option>
                                          @endforeach
                                        </select>
                                      </div>


                                      <div class="form-group">
                                        <label>Update District Name</label>
                                        <input
                                         type="text"
                                         name="district_name"
                                         required
                                         value="{{$edit->district_name}}"
                                         class="form-control"
                                         placeholder="type here recipe name...">
                                      </div>



                                      <div class="form-group float-right">
                                        <button
                                        class="btn btn-info"
                                        type="submit"
                                        name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Update  District</button>
                                      </div>

                                    </form>

                              </div>
                            </div>
                            </div>


              <!-- main content end -->

@endsection

@extends('admin_dashboard')
@section('admin_content')

              <!-- main content -->


                        <div class="  card text-dark">
                            <div class="card-header">
                              <a class="float-right btn btn-success" href="{{url('admin/division')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View All Division</a>
                              <h3 class="card-title font-weight-bold">Division Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="row justify-content-center card-body">
                              <div class="col-md-6">

                                    <form role="form" method="POST" action="{{url('admin/division')}}" enctype="multipart/form-data">
                                      @csrf




                                      <div class="form-group">
                                        <label>Enter Division Name</label>
                                        <input
                                         type="text"
                                         name="division_name"
                                         required
                                         class="form-control"
                                         placeholder="type here recipe name...">
                                      </div>


                                      <div class="form-group float-right">
                                        <button
                                        class="btn btn-info"
                                        type="submit"
                                        name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Divsion</button>
                                      </div>

                                    </form>

                              </div>
                            </div>
                            </div>


              <!-- main content end -->

@endsection

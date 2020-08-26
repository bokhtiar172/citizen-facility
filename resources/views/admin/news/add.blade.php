@extends('admin_dashboard')
@section('admin_content')

              <!-- main content -->


                        <div class="  card text-dark">
                            <div class="card-header">
                              <a class="float-right btn btn-success" href="{{url('admin/news')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View All News</a>
                              <h3 class="card-title font-weight-bold">News Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="row justify-content-center card-body">
                              <div class="col-md-6">

                                    <form role="form" method="POST" action="{{url('admin/news')}}" enctype="multipart/form-data">
                                      @csrf




                                      <div class="form-group">
                                        <label for="">Select Division</label>
                                        <select class="form-control" name="division_id">
                                          @foreach(App\division::all() as $v_division)
                                          <option value="{{$v_division->id}}">{{$v_division->division_name}}</option>
                                          @endforeach
                                        </select>
                                      </div>


                                      <div class="form-group">
                                        <label>Enter News Title</label>
                                        <input
                                         type="text"
                                         name="title"
                                         required
                                         class="form-control"
                                         placeholder="type here  News Title...">
                                      </div>



                                      <div class="form-group">
                                        <label>Enter News long description</label>
                                        <input
                                        type="file"
                                        name="image"
                                        value="">
                                      </div>



                                      <div class="form-group">
                                        <label>Enter News short description</label>
                                        <textarea
                                        class="form-control"
                                        name="short_des"
                                        rows="3"
                                        placeholder="Enter Your News Short description"
                                        cols="30"></textarea>
                                      </div>


                                      <div class="form-group">
                                        <label>Enter News long description</label>
                                        <textarea
                                        class="form-control"
                                        name="long_des"
                                        rows="3"
                                        placeholder="Enter Your News long description"
                                        cols="30"></textarea>
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

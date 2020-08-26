@extends('admin_dashboard')
@section('admin_content')

              <!-- main content -->


                        <div class="  card text-dark">
                            <div class="card-header">
                              <a class="float-right btn btn-success" href="{{url('admin/news')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View All News</a>
                              <h3 class="card-title font-weight-bold">News Update Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="row justify-content-center card-body">
                              <div class="col-md-6">

                                    <form role="form" method="POST" action="{{url('admin/news/'.$edit->id)}}" enctype="multipart/form-data">
                                      @csrf
                                      @method('put')



                                      <div class="form-group">
                                        <label for="">Select Division</label>
                                        <select class="form-control" name="division_id">
                                          @foreach(App\division::all() as $v_division)
                                          <option value="{{$v_division->id}}">{{$v_division->division_name}}</option>
                                          @endforeach
                                        </select>
                                      </div>


                                      <div class="form-group">
                                        <label>update News Title</label>
                                        <input
                                         type="text"
                                         name="title"
                                         required
                                         class="form-control"
                                         value="{{$edit->title}}"
                                         placeholder="type here  News Title...">
                                      </div>



                                      <div class="form-group">
                                        <label>update News long description</label>
                                        <input
                                        type="file"
                                        name="image"
                                        value="">

                                        <p>Old Image: <img src="{{asset($edit->image)}}" height="50px" width="50px;" alt="">  </p>
                                      </div>




                                      <div class="form-group">
                                        <label>update News short description</label>
                                        <textarea
                                        class="form-control"
                                        name="short_des"
                                        rows="3"
                                        value=""
                                        placeholder="update Your News Short description"
                                        cols="30">{{$edit->short_des}}</textarea>
                                      </div>


                                      <div class="form-group">
                                        <label>update News long description</label>
                                        <textarea
                                        class="form-control"
                                        name="long_des"
                                        rows="3"
                                        value=""
                                        placeholder="update Your News long description"
                                        cols="30">{{$edit->long_des}}</textarea>
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

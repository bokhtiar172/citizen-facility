@extends('admin_dashboard')
@section('admin_content')

              <!-- main content -->


                        <div class="  card text-dark">
                            <div class="card-header">
                              <a class="float-right btn btn-success" href="{{url('admin/image')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View All District</a>
                              <h3 class="card-title font-weight-bold">Update Image Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="row justify-content-center card-body">
                              <div class="col-md-6">

                                    <form role="form" method="POST" action="{{url('admin/image/'.$edit->id)}}" enctype="multipart/form-data">
                                      @csrf
                                      @method('put')




                                      <div class="form-group">
                                        <label>Select image name</label>
                                        <input
                                         type="text"
                                         name="name"
                                         required
                                         value="{{$edit->name}}"
                                         class="form-control"
                                         placeholder="type here  name...">
                                      </div>



                                      <div class="form-group">
                                        <label>Select image</label>
                                        <input
                                         type="file"
                                         name="image"

                                         class="form-control"
                                         >
                                         <p>Old Image : <img src="{{asset($edit->image)}}" height="40px" width="40px;" alt=""> </p>
                                      </div>



                                      <div class="form-group float-right">
                                        <button
                                        class="btn btn-info"
                                        type="submit"
                                        name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Update Gallary</button>
                                      </div>

                                    </form>

                              </div>
                            </div>
                            </div>


              <!-- main content end -->

@endsection

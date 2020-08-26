@extends('admin_dashboard')
@section('admin_content')

                  <!-- Main content -->
                  <section class="content">
                    <div class="row">
                      <div class="col-12">

                        <!-- /.card -->

                        <div class="card text-dark">
                          <div class="card-header">
                            <a class="float-right btn btn-info" href="{{url('admin/news/create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add News</a>
                            <h3 class="card-title font-weight-bold">Division List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>News Sl</th>
                                <th>Division</th>
                                <th>News Title</th>
                                <th>News Image</th>
                                <th>Status</th>
                                <th>Action</th>

                              </tr>
                              </thead>
                              <tbody>
                                @foreach($all_newss as $v_news)
                                  <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$v_news->division->division_name}}</td>
                                    <td>{{$v_news->title}}</td>
                                    <td><img src="{{asset($v_news->image)}}" height="40px;" width="40px;" alt="">  </td>
                                    <td>
                                      @if($v_news->status==1)
                                      <span class="bg-success text-light " href="">Active</span>&nbsp;&nbsp;
                                      @else
                                      <span class="bg-danger text-light " href="">Inactive</span>&nbsp;&nbsp;
                                      @endif
                                    </td>
                                    <td>
                                      @if($v_news->status==0)
                                      <a class="text-success h5" href="{{url('admin/news-active/'.$v_news->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                                      @else
                                      <a class="text-danger h5" href="{{url('admin/news-inactive/'.$v_news->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                                      @endif
                                      <a class="text-info h5" href="{{url('admin/news/'.$v_news->id.'/edit')}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;


                                      <form  class="" action="{{url('admin/news/'.$v_news->id)}}" method="post">
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
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </section>






@endsection

@extends('admin_dashboard')
@section('admin_content')

                  <!-- Main content -->
                  <section class="content">
                    <div class="row">
                      <div class="col-12">

                        <!-- /.card -->

                        <div class="card text-dark">
                          <div class="card-header">

                            <h3 class="card-title font-weight-bold"> User Complain List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
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
                                @foreach($complain as $v_complain)
                                  <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$v_complain->user->name}}</td>
                                    <td>{{$v_complain->comment}}</td>
                                    <td>
                                      @if($v_complain->status==1)
                                      <span class="bg-success text-light " href="">seen</span>&nbsp;&nbsp;
                                      @else
                                      <span class="bg-danger text-light " href="">not seed</span>&nbsp;&nbsp;
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
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </section>






@endsection

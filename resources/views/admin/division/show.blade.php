@extends('admin_dashboard')
@section('admin_content')

                  <!-- Main content -->
                  <section class="content">
                    <div class="row">
                      <div class="col-12">

                        <!-- /.card -->

                        <div class="card text-dark">
                          <div class="card-header">
                            <a class="float-right btn btn-info" href="{{url('admin/division/create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Division Category</a>
                            <h3 class="card-title font-weight-bold">Division List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>District Sl</th>
                                <th>Divistion Name</th>
                                <th>action</th>

                              </tr>
                              </thead>
                              <tbody>
                                @foreach($all_division as $v_division)
                                  <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$v_division->division_name}}</td>

                                    </td>
                                    <td>

                                      <a class="text-info h5" href="{{url('admin/division/'.$v_division->id.'/edit')}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;


                                      <form  class="" action="{{url('admin/division/'.$v_division->id)}}" method="post">
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

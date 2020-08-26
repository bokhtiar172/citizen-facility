@extends('admin_dashboard')
@section('admin_content')

                  <!-- Main content -->
                  <section class="content">
                    <div class="row">
                      <div class="col-12">

                        <!-- /.card -->

                        <div class="card text-dark">
                          <div class="card-header">
                            <a class="float-right btn btn-info" href="{{url('admin/district/create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add District</a>
                            <h3 class="card-title font-weight-bold">Division List</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Division Sl</th>
                                <th>Division Name</th>
                                <th>District Name</th>
                                <th>Status</th>
                                <th>Action</th>

                              </tr>
                              </thead>
                              <tbody>
                                @foreach($all_district as $v_district)
                                  <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$v_district->division->division_name}}</td>
                                    <td>{{$v_district->district_name}}</td>
                                    <td>
                                      @if($v_district->district_status==1)
                                      <span class="bg-success text-light " href="">Active</span>&nbsp;&nbsp;
                                      @else
                                      <span class="bg-danger text-light " href="">Inactive</span>&nbsp;&nbsp;
                                      @endif
                                    </td>
                                    <td>
                                      @if($v_district->district_status==0)
                                      <a class="text-success h5" href="{{url('admin/district-active/'.$v_district->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                                      @else
                                      <a class="text-danger h5" href="{{url('admin/district-inactive/'.$v_district->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                                      @endif
                                      <a class="text-info h5" href="{{url('admin/district/'.$v_district->id.'/edit')}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;


                                      <form  class="" action="{{url('admin/district/'.$v_district->id)}}" method="post">
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

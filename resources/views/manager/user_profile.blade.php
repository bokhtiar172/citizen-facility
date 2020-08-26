@extends('manager_dashboard')
@section('manager_content')


<!-- Main content -->
    <section class="content text-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img src="" alt="">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>




              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">




                  <div class="card card-primary">
                    <p><strong>Name:</strong> {{$user->name}} </p><br>
                    <p><strong>NID:</strong> {{$user->nid}} </p><br>
                    <p><strong>Phone:</strong> {{$user->phone}} </p><br>
                    <p><strong>Email:</strong> {{$user->email}} </p><br>
                    @if($user->status==0)
                    <p class="float-right btn btn-info "><a class="text-light" href="{{url('manager/confrim-user/'.$user->id)}}">Confrim Register</a> </p>
                    @else
                    <p><strong>Already Register</strong> </p>
                    @endif
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

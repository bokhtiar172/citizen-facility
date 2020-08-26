@extends('admin_dashboard')
@section('admin_content')


  <section class="container text-dark">

    <div class="row justify-content-center">

      <div class="col-md-11">
  
        <table class="table">
          <thead>
            <th>Sl</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>NID</th>
            <th>Action</th>
          </thead>

          <thead>
            @foreach($user as $v_user)
              <tr>
                <td>{{$loop->index +1}}</td>
                <td>{{$v_user->name}}</td>
                <td>{{$v_user->phone}}</td>
                <td>{{$v_user->nid}}</td>

                <td>
                  <a class="btn btn-info" href="{{url('admin/notice/store-user/'.$v_user->id)}}">Confirm</a>
                </td>
              </tr>
            @endforeach
          </thead>
        </table>
      </div>
    </div>



    </section>


  </section>


@endsection

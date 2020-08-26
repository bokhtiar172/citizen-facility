@extends('user_dashboard')
@section('user_content')
<hr>
  @foreach($division as $v_division)
<div class="">
  <legend class="text-center">Notice Date:  {{$v_division->created_at}} </legend>
</div><br><br>
      <section class="container">
        <div class="row">
          <div class="col-md-6">
            <legend>Govt People Info</legend>
            <p><strong>NAME:</strong>{{$v_division->name}} </p>
            <p><strong>EMAIL:</strong>{{$v_division->email}} </p>
            <p><strong>PHONE:</strong>{{$v_division->phone}} </p>
            <p><strong>LOCATION:</strong>{{$v_division->location}} </p>
          </div><!--end of left side -->

          <div class="col-md-6">
            <legend>Details</legend>
            <p><strong>division name:</strong>{{$v_division->division->division_name}} </p>
            <p><strong>People amount:</strong>{{$v_division->amount}} </p>
            <p><strong>item's:</strong>{{$v_division->item}} </p>
          </div><!--end of right side -->
        </div>

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
                    @foreach(App\userGetTran::where('post_id',$v_division->id)->where('status',0)->get() as $v_user)
                      <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$v_user->user->name}}</td>
                        <td>{{$v_user->user->phone}}</td>
                        <td>{{$v_user->user->nid}}</td>

                        <td>
                          <a class="btn btn-info" href="{{url('user/get-relife/'.$v_user->id)}}">Confirm</a>
                        </td>
                      </tr>
                    @endforeach
                  </thead>
                </table>
              </div>
            </div>



            </section>


          </section>



      </section>

  @endforeach
<hr>
@endsection

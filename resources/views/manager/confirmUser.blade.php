@extends('manager_dashboard')
@section('manager_content')

<table class="table table-striped text-dark">
<thead>
  <tr>
    <th scope="col">SL</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">NID</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
  @foreach(App\User::where('role_id',3)->where('status',1)->get() as $v_user)
  <tr>
    <th scope="row">{{$loop->index +1}}</th>
    <td>{{$v_user->name}}</td>
    <td>{{$v_user->email}}</td>
    <td>{{$v_user->nid}}</td>
    <td><a href="{{url('manager/single-user/'.$v_user->id)}}">View</a> </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection

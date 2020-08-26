@extends('user_dashboard')
@section('user_content')

<table class="table table-striped container">
<thead>
  <tr>
    <th scope="col">SL</th>
    <th scope="col">Division Name</th>
    <th scope="col">District</th>
    <th scope="col">Item</th>
    <th scope="col">End date</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>

  @foreach(App\notice::all() as $v_notice)
  <tr>
    <th scope="row">{{$loop->index +1}}</th>
    <td>{{$v_notice->division->division_name}}</td>
    <td>{{$v_notice->district->district_name}}</td>
    <td>{{$v_notice->item}}</td>
    <td>{{$v_notice->created_at}}</td>
    <td><a href="{{url('user/view-tran/'.$v_notice->id)}}">View</a> </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection

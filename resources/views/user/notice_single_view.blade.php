@extends('user_dashboard')
@section('user_content')

  <section class="container text-center">
    <div class="row">

      <div class="col-md-6">
        <legend class="text-center">Govt People</legend><br>
        <p><strong>Name:</strong> {{$notice->name}}</p><br>
        <p><strong>Name:</strong> {{$notice->email}}</p><br>
        <p><strong>Name:</strong> {{$notice->location}}</p><br>
        <p><strong>Name:</strong> {{$notice->phone}}</p><br>
      </div>

      <div class="col-md-6">
        <legend class="text-center">Notice Info</legend><br>
        <p><strong>Division:</strong> {{$notice->division->division_name}}</p><br>
        <p><strong>District:</strong> {{$notice->district->district_name}}</p><br>
        <p><strong>Item:</strong> {{$notice->item}}</p><br>
        <p><strong>Amount:</strong> {{$notice->amount}}</p><br>
      </div>

    </div>
  </section>

@endsection

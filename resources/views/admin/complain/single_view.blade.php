@extends('admin_dashboard')
@section('admin_content')

<section class="container text-dark">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-6">
          <legend>Sender Info</legend>
          <strong>Name: {{$single_view->user->name}} </strong><br>
          <strong>email: {{$single_view->user->email}} </strong><br>
          <strong>phone: {{$single_view->user->phone}} </strong><br>
          <strong>nid: {{$single_view->user->nid}} </strong><br>

        </div>

        <div class="col-md-6">
          <legend>Sender Complain</legend>
          <strong>Complain: {{$single_view->comment}} </strong><br>
        </div>
      </div>
    </div>
  </div>
<hr>

<div class="py">
  <div class="row justify-content-center text-dark">
    <div class="col-md-6">
      <form class="" action="{{url('admin/complain/store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="">Complain Reply</label>
          <textarea name="comment" class="form-control" rows="4" cols="40"></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{$single_view->user_id}}">
        <input type="hidden" name="complain_id" value="{{$single_view->id}}">
        <input class="btn btn-info float-right" type="submit" name="btn" value="Repley">
      </form>
    </div>
  </div>
</div>
</section>

@endsection

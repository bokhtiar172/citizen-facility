@extends('user_dashboard')
@section('user_content')

  <section class="container">
    <div class="row">

      <div class="col-md-6">
        <legend>E-mail</legend>
        <form class="" action="index.html" method="post">
          @csrf
          <div class="">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" value="">
          </div>

          <div class="">
            <label for="">Subject</label>
            <input class="form-control" type="text" name="text" value="">
          </div>

          <div class="">
            <label for="">Desxription</label>
            <textarea class="form-control" name="name" rows="4" cols="40"></textarea>
          </div>
          <br>
          <div class="">
            <input class="btn btn-info" type="text" name="" value="Submit">
          </div>


        </form>
      </div>

      <div class="col-md-6">
        <legend>Compalin Box</legend>
        <form class="" action="{{url('user/Compalin')}}" method="post">
          @csrf

            <div class="">
              <label for="">Enter Your Opinion</label>
              <textarea class="form-control" name="comment" rows="4" cols="40"></textarea>
            </div><br>
            <input class="btn btn-info" type="submit" name="" value="Submit">

        </form>
      </div>

    </div>
  </section>

@endsection

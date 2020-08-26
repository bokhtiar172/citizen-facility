@extends('admin_dashboard')
@section('admin_content')

  <section class="container text-dark">
    <div class="justify-content-center row">
      <div class="col-md-7">
        <form class="" action="{{url('admin/notice/find-location')}}" method="get">
          @csrf
            <div class="form-group">
              <label for="">Select Division</label>
                <select class="form-control" name="division_id">
                  @foreach(App\division::all() as $v_division)
                  <option value="{{$v_division->id}}">{{$v_division->division_name}}</option>
                  @endforeach
                </select>
            </div><!--end of division-->

            <div class="form-group">
              <label for="">Select District</label>
                <select class="form-control" name="district_id">
                  @foreach(App\district::all() as $v_dis)
                  <option value="{{$v_dis->id}}">{{$v_dis->district_name}}</option>
                  @endforeach
                </select>
            </div><!--end of district-->
            <div class="form-group">
              <input class="btn btn-info float-right" type="submit" name="btn" value="Confirm">
            </div>
        </form>
      </div>
    </div>
  </section>

@endsection

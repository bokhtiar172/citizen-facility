@extends('user_dashboard')
@section('user_content')

<div class="card-group container">
  <div class="card">
    <img class="card-img-top" src="{{asset('images/riaz.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Riaz AR</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <div style="color:#34D8BA;font-weight: 700; "><p class="card-text">Founder & CEO</p></div>

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('images/bokhtiar.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bokhtiar Tosher</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <div style="color:#34D8BA;font-weight: 700; "><p class="card-text">
      	<p class="card-text">CTO</p>
      </div>

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('images/utsho.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mahfuzur Uthso</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <div style="color:#34D8BA;font-weight: 700; "><p class="card-text">
      	<p class="card-text">Project Manager</p>
      </div>

    </div>
  </div>
</div>


@endsection

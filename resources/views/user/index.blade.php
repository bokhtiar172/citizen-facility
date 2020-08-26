@extends('user_dashboard')
@section('user_content')


  <div class="" > <img style="width: 100%"  src="{{asset('img/bangla.png')}}"> </div>
  <div style="background-color:green; padding: 40px 0; color:#fff;">
  <div class="container" >
  <div class="row" style="text-align: center;">
    <div class="col order-1">
      <h3>"No one will be deprived"</h3>
      <p>Our goal is to get the grant from the government for every citizen.</p>
    </div>
  </div>
</div>
</div>
</div>
<div class="py-5 container"><!-- cityzen facility start here -->

          <h3 class="text-center">OUR CITYZEN SERVICE</h3>
          <hr>

          <div class="py-5">
            <div class="row"style="margin-left:4%;  "   >
              <div class="col-md-4 ">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Donation</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Help Center</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

                  </div>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Agriculter</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
      </div><!-- cityzen facility end here -->






  <div class=""><!-- news corner start here -->

        <section class="container py-5">
  <h4 class="text-center">RECENT CITYZEN NEWS</h4>
  <hr>
  <div class="container text-center">
    @foreach(App\division::latest()->where('division_status',1)->get() as $v_division)
      <a class="btn btn-info" href="">{{$v_division->division_name}}</a>
    @endforeach
  </div>

  <br><br><br>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-sm-10">
        <div class="row">
          @foreach(App\news::latest()->get() as $v_news)
              <div class="col-md-4 col-12 col-lg-4 mt-2">
              <div class="card" style=" height: 300px;">
                  <img style="background-image: cover; width: 100%; height: 200px;" src="{{asset($v_news->image)}}" alt="">
                <div class="card-body">
                  <span>{{$v_news->created_at}}</span>
                  <h5><a style="text-decoration: none; " href="">
                  {{$v_news->title}}</a></h5>
              </div>
              </div>
              </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

</div>


  </div><br><br>
</section>

      </div><!-- news corner end here -->


      <section class="container py-5"><!-- honarable speeker start here  -->

        <h4 class="text-center"> BANGLADESH PARTLIAMENT MEMBER'S SPEECHES</h4>
        <hr>
        <br><br>
        <div class="section-padding py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img height="400px;" width="100%" src="{{asset('img/s.jpg')}}" alt="">
        </div>
        <div class="col-md-6 text-center">
          <div class="product-des mt-5"><br><br>
            <h2>PRIME MINISTER SPEECHES</h2>
            <h4>Lorem ipsum dolor</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni vitae assumenda pariatur iste atque, repudiandae.assumenda pariatur iste atque, repudiandae.</p>
          </div>
        </div>
      </div>
   </div><br><br><br>
   <div class="pro-des">


      <div class="row ">


        <div class="row"style="  "   >
          <div class="col-md-3 ">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h6 class="card-title">MEMBER OF PARTLIAMENT</h6>
                <img src="{{asset('img/p4.jpg')}}" width="100%" height="180px" alt="">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

              </div>
            </div>
          </div>


          <div class="col-md-3 ">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h6 class="card-title">MEMBER OF PARTLIAMENT</h6>
                <img src="{{asset('img/p3.jpg')}}" width="100%" height="180px" alt="">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h6 class="card-title">MEMBER OF PARTLIAMENT</h6>
                <img src="{{asset('img/p2.jpg')}}" width="100%" height="180px" alt="">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

              </div>
            </div>
          </div>


          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h6 class="card-title">MEMBER OF PARTLIAMENT</h6>
                <img src="{{asset('img/p1.jpg')}}" width="100%" height="180px" alt="">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-success float-right" href="#" class="card-link">more info...</a>

              </div>
            </div>
          </div>
        </div>
      </div>





      </div>
    </div>
  </div>
      </section><!-- honarable speeker start here  -->






      <section class="container py-5">
        <h3 class="text-center">HAPPINESS CITIZEN GALLERY</h3><hr> <br><br>
        <div class="">
          <div class="row">
            @foreach(App\image::latest()->get() as $v_image)
            <div class="col-md-4 col-sm-6 mt-4">
              <img src="{{asset($v_image->image)}}" height="200px;" width="100%" alt="">
            </div>
            @endforeach
          </div>
        </div>
      </section>





@endsection

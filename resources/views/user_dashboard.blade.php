
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">


  <a class="navbar-brand" href="#">Citizen-facilites</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/facility')}}">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/about')}}">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Divisions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @foreach(App\division::all() as $v_division)
            <a class="dropdown-item" href="{{url('user/division-id/'.$v_division->id)}}">{{$v_division->division_name}}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('user/contact')}}">Contact Us</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Auth::User()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('user/profile')}}">Profile</a>
          <a class="dropdown-item" href="{{url('user/logout')}}">Logout</a>

        </div>
      </li>


    </ul>

  </div>
  </div>
</nav><!-- end of navbar -->


  @yield('user_content')

<!--section start -->
<section class="bg-light py-5">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p class="h2"> About us </p>
            <br>
            <p> Our main idea... Is to offer you everything new in the culinary world to gain from your experience, which can be one of the most famous international cuisines in the future someday.</p>
            <p> Feel free to share your recipes with us </p>
        </div>
        <div class="col-md-4">
            <p class="h2"> Need Help </p>
            <br>
            <ul class="list-unslyled px-0" style="list-style: none">
                    <li> <i class="fas fa-envelope"></i>  Email: <a href="mailto:mail@dishmize.org">mail@dishmize.org</a></li>
                </ul>
        </div>
        <div class="col-md-4">
            <p class="h2"> Follow Us  </p>
            <br>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="https://www.facebook.com/DishMize-197693270939732/?modal=admin_todo_tour"target="blank"   ><i class="fab fa-facebook-f"></i> </a> </li>
              <li class="list-inline-item"><a href="https://www.instagram.com/dishmize_network/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/in/dishmize-network-838094167/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/dishmize" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
        </div>
    </div>
</div>

</body>
</html>

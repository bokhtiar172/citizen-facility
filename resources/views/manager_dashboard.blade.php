<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manager || Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!--bootstrap css link-->
    <link rel="stylesheet" href="css/index.css"><!--css link-->
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <!-- navbar  start -->
          <nav class="navbar navbar-expand bg-dark">
            <div class="container">
              <a href="{{route('manager.dashboard')}}" class="text-light navbar-brand">Manager Dashbord</a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-light" href="#">{{Auth::User()->name}}</a> </li>
              
              </ul>
            </div>
          </nav>
      <!-- navbar  end -->
      <!-- main content start -->

        <section class="mt-2" style="background-color: #EAEDED; color: white;">
          <div class="">
          <div class="row ml-1 mr-1">
            <!-- main content left side start -->

            <div class="col-md-2 text-center left-side" style="background-color: #34495E;  " >
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="{{url('admin.dashbord')}}"><i class="fas fa-house-user"></i><span class="ml-1">Dashbord</span> </a> </li>

              <div class="dropdown mt-1"><!-- start category dropdown-->
              <a class="btn dropdown dropdown-toggle font-weight-bold"  type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-certificate"></i> <span class="ml-1">non register</span>
            </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('manager/nonauthorize')}}">Non Register</a>
              </div>
            </div><!-- end category dropdown -->


            <div class="dropdown mt-1"><!-- start brand dropdown-->
            <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-bandcamp"></i>  <span class="ml-1">Register</span>
          </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{url('manager/register-user')}}">All Register</a>
            </div>
          </div><!-- end brand dropdown -->








        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-bell"></i><span class="ml-1">Notification</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-envelope"></i><span class="ml-1">E-mail</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fal fa-sms"></i><span class="ml-1">Message</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="{{url('manager/logout')}}"><i class="fas fa-sign-out-alt"></i><span class="ml-1">Log Out</span> </a> </li>

          </ul>
      </div>
            <!-- main content left side end-->

            <!-- main content right side start -->
            <div class="col-md-10">



              <!-- main content -->

              @yield('manager_content')



              <!-- main content end -->





            </div>
            <!-- main content right side end-->
          </div>
          </div>
        </section>








      <!-- main content end-->


<!-- javascript link bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

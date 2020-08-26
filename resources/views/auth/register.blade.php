<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>

    <div class="container" style="background-color: #D7DBDD; ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class=" text-center h4">Cityzen Registration Form</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('National id ') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="number" class="form-control" name="nid" value="" required autocomplete="name" autofocus>
                                </div>
                            </div><!--nid --->


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' ') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="hidden" class="" name="image" value="avater.jpg" required autocomplete="name" autofocus>
                                </div>
                            </div><!--image -->


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select Division ') }}</label>

                                <div class="form-group">

                                    <select class="form-control" name="division">
                                      @foreach(App\division::all() as $v_division)
                                      <option value="{{$v_division->id}}">{{$v_division->division_name}}</option>
                                      @endforeach
                                    </select>
                                </div><!--end of division-->
                            </div><!--division -->




                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select District ') }}</label>

                                <div class="form-group">

                                    <select class="form-control" name="district">
                                      @foreach(App\district::all() as $v_dis)
                                      <option  value="{{$v_dis->id}}">{{$v_dis->district_name}}</option>
                                      @endforeach
                                    </select>
                                </div>

                            </div><!--district  -->



                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone ') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="" required autocomplete="name" autofocus>
                                </div>
                            </div><!--phone -->




                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('location ') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="location" value="" required autocomplete="name" autofocus>
                                </div>
                            </div><!--location -->


                            <div class="form-group row">


                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" name="role_id" value="3"  autocomplete="name" autofocus>
                                </div>
                            </div><!--role_id -->










                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <a href="{{route('login')}}">Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>citizen facility website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <h3>HI <strong>{{$notice->name}} You Will Give The All People Govt Help</strong> </h3>
    <h4>Total Get: {{$notice->amount}}</h4>
    <h4>Total Item List: {{$notice->item}}</h4>
    <h5>Plz Visite the site</h5>
    <a href="{{route('user.dashboard')}}">Site Visit</a>
  </body>
</html>

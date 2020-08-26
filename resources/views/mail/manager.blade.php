<!DOCTYPE html>
<html>
<head>
    <title>New member add Email</title>
</head>

<body>
<h2>New Member add confirm plz Bokhtiar toshar</h2>
<br/>
Your name is {{$user['name']}}<br>
Your email is {{$user['email']}}<br>
Your nid is {{$user['nid']}}<br>
Your phone is {{$user['phone']}}<br>
<a class="btn btn-info" href="{{route('manager.dashboard')}}">Confrim</a><br>
Thnks for registration out site
</body>

</html>

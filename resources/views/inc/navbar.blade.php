<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Job For All</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('dash') }}">DASHBOARD</a></li>
      @if(Session::has('admin'))
      <li class="active"><a href="{{route('list') }}">USER LIST</a></li>
      @endif

     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{route('registration') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{route('adminReg') }}"><span class="glyphicon glyphicon-user"></span> Sign Up A</a></li>


      <li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

      <li><a href="{{route('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>

</body>
</html>

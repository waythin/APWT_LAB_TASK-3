@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}


* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  /* padding: 12px; */
  background-color: white;
}


.textred {
  color: red;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type='number'],input[type='date'] {
  width: 30%;
  padding: 8px;
  margin: 2px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius: 5px;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  border-radius: 5px;
}

/* Overwrite default styles of hr */
hr {
  margin-bottom: 25px;
  border-radius: 5px;
  border-top: 5px solid #00b8e6;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #00b8e6;
  color: white;
  padding: 7px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  border-radius: 5px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


</style>
</head>
<body>

<form action="{{route('adminedit')}}" method="post">
  {{csrf_field()}}

  <div class="container,login-block">
    <h3>Edit Admin Profile</h3>
    <hr>

    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter your Username" name="username" id="username" value="{{$admin->username}}">
    @error('username')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter your Email" name="email" id="email" value="{{$admin->email}}">
    @error('email')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="phone"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter your phone number" name="phone" id="phone" value="{{$admin->phone}}">
    @error('phone')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>


    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" value="{{$admin->password}}">
    @error('password')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="password_confirmation"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" value="{{$admin->password}}">
    @error('password_confirmation')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <button type="submit" class="registerbtn">UPDATE</button>
  </div>
  
 
</form>

</body>
</html>
@endsection 

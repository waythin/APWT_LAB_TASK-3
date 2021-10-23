@extends('layouts.app')

@section('content')

<h3>User List</h3>
<table class="table table-borded">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>gender</th>
        <th>dob</th>
        <th>jobxp</th>
        <th>password</th>

    </tr>
    @foreach($jusers as $juser)
    <tr>
        
    <td>{{$juser->id}}</th>
        <td>{{$juser->name}}</td>
        <td>{{$juser->email}}</td>
        <td>{{$juser->phone}}</td>
        <td>{{$juser->gender}}</td>
        <td>{{$juser->dob}}</td>
        <td>{{$juser->jobxp}}</td>
        <td>{{$juser->password}}</td>
        <td><a href="/user/edit/{{$juser->id}}/{{$juser->email}}">Edit</a></td>
        <td><a href="/user/delete/{{$juser->id}}/{{$juser->email}}">Delete</a></td>
        
    </tr>
    @endforeach
</table>

@endsection 
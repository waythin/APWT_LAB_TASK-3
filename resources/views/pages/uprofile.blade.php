@extends('layouts.app')

@section('content')


    <h1>My Profile</h1>

    <table class="table table-borded">
        <tr>
            <td>Name :</td><td>{{$juser->name}}</td>
        </tr>
        <tr>
            <td>Email :</td><td>{{$juser->email}}</td>
        </tr>
        <tr>
            <td>Phone :</td><td>{{$juser->phone}}</td>
        </tr>
        <tr>
            <td>Gender :</td><td>{{$juser->gender}}</td>
        </tr>  
        <tr>
            <td>Date Of Birth :</td><td>{{$juser->dob}}</td>
        </tr>
        <tr>
            <td>Job Experience [Year]:</td><td>{{$juser->jobxp}}</td>
        </tr>
        <tr>
            <td>Password :</td><td>{{$juser->password}}</td>
        </tr>
        <tr>
            <td>
            <a href="/user/edit/{{$juser->id}}/{{$juser->email}}">Edit</a>
            </td>
        </tr>
        


    </table>
@endsection 



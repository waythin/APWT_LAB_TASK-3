@extends('layouts.app')

@section('content')


    <h1>My Admin Profile</h1>

    <table class="table table-borded">
        <tr>
            <td>Username :</td><td>{{$admin->username}}</td>
        </tr>
        <tr>
            <td>Email :</td><td>{{$admin->email}}</td>
        </tr>
        <tr>
            <td>Phone :</td><td>{{$admin->phone}}</td>
        </tr>
        <tr>
            <td>Password :</td><td>{{$admin->password}}</td>
        </tr>
        <tr>
            <td>
            <a href="/admin/edit/{{$admin->id}}/{{$admin->email}}">Edit</a>
            </td>
        </tr>
        


    </table>
@endsection 



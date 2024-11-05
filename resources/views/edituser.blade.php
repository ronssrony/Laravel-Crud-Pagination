@extends('layout.masterlayout')



@section('title')
    EditUser
@endsection

@section('content')

<form action="/edit/{{$user[0]->student_id}}" method="POST">
 @csrf
    <input type="text" name="username" value="{{$user[0]->username}}" placeholder="username" ><br><br>
    <input type="email" name="email" value="{{$user[0]->email}}" placeholder="email"> <br><br>
    <input type="password" name="password" value="{{$user[0]->password}}" placeholder="password">
    <input type="submit" value="Submit">
</form>
@endsection
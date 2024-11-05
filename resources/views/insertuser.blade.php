@extends('layout.masterlayout')


@section('content')

<form action="/adduser" method="POST">
    @csrf
       <input type="text" name="username"  placeholder="username" ><br><br>
       <input type="email" name="email"  placeholder="email"> <br><br>
       <input type="password" name="password"  placeholder="password">
       <input type="submit" value="Submit">
   </form>
    
@endsection
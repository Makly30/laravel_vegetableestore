@extends('layout.master')
@section('title')
Login
@endsection
@section('content')
<form action="{{route('login.on')}}"method='post' enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<small>Don't have an account?
    <a href="{{route('register')}}">Register</a>
</small>
@endsection
@extends('backend.layout.master')
@section('title','System Setting')
@section('content')


<div class="login-box">
  <h2>System Setting</h2>
  <form action="{{route('systemform')}}" method='POST'  enctype='multipart/form-data'>
  @csrf  
  <div class="user-box">
      <input type="text" name="systemname" required="">
      <label>System Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="phone" required="">
      <label>Phone</label>
    </div>
    <div class="user-box">
      <input type="text" name="address" required="">
      <label>Address</label>
    </div>
    <div class="user-box">
      <input type="text" name="slogan" required="" >
      <label>Slogan</label>
    </div>
    <div class="user-box">
        <input type="file"   name="logo"><!-- Add accepted file types if needed -->
        <label for="fileInput">Choose a file:</label>
    </div>
   
    <button type="submit" class="btn btn-primary">submit</button>
</div>

@endsection
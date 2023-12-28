@extends('backend.layout.master')
@section('title','Category')
@section('content')


<div class="login-box">
  <h2>News Category</h2>
  <form action="{{route('admin.update',$cat_data->id)}}" method='POST' >
  @csrf  
  <div class="user-box">
      <input type="text" name="catename" required="" value="{{$cat_data->name ?? ''}}">
      <label>Category Name</label>
    </div>
    <div class="user-box">
    
  <select name ='status' value="{{$cat_data->name ?? ''}}"> 
    <option value='1' > Active</option>
    <option  value='0'> Inactiv</option>
   </select >
   <br>
     
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

@endsection
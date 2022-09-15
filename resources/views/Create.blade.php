@extends('student.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Student Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>
        <label>Image</label><br>
        <input type="text" name="image" id="image" class="form-control"><br>
        <label>Age</label><br>
        <input type="text" name="age" id="age" class="form-control"><br>
        <label>Status</label><br>
        <input type="text" name="status" id="status" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
   
  </div>
</div>
 
@stop
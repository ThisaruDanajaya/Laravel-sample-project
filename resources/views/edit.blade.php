@extends('student.layout')
@section('content')
 
<div class="card">
  <div class="card-header">student Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$student->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="image" value="{{$student->image}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$student->age}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$student->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop

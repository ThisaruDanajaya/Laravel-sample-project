@extends('student.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $student->name }}</h5>
        <p class="card-text">Image : {{ $student->image }}</p>
        <p class="card-text">Age : {{ $student->age }}</p>
        <p class="card-text">Status : {{ $student->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
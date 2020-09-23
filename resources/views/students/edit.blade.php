@extends('students.layout')
@section('content')
<h1 class="text-center">Edit Student Entry</h1>
<h2 class="text-center">{{$student->firstName." ".$student->lastName}}</h2>
<form method="post" action="{{route('students.update', $student->id)}}">
    @csrf
    @method('patch')
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">First Name</label>
      <div class="col-sm-10">
        <input type="text" name="firstName" value="{{$student->firstName}}" class="form-control"placeholder="First Name">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Last Name</label>
      <div class="col-sm-10">
        <input type="text" name="lastName" value="{{$student->lastName}}" class="form-control" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Age</label>
        <div class="col-sm-10">
          <input type="number" name="age" value="{{$student->age}}" class="form-control" placeholder="Age">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Course</label>
        <div class="col-sm-10">
          <input type="text" name="course" value="{{$student->course}}" class="form-control" placeholder="Course">
        </div>
      </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Edit</button>
        <a class="btn btn-primary" href="{{route('students.index')}}" role="button">Back</a>
      </div>
    </div>
  </form>
@endsection
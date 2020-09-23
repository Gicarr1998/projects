@extends('students.layout')
@section('content')
    <div class="text-center">
        <h1>Student List</h1>
        <a class="btn btn-primary" href="{{route('students.create')}}" role="button">Create</a>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID no.</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Age</th>
                <th scope="col">Course</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                  <tr>
                      <td>{{$student->id}}</td>
                      <td>{{$student->firstName}}</td>
                      <td>{{$student->lastName}}</td>
                      <td>{{$student->age}}</td>
                      <td>{{$student->course}}</td>
                  <td><a class="btn btn-warning" href="{{'/students/' .$student->id. '/edit'}}" role="button">Edit</a></td>
                  <td><span class="btn btn-danger" role="button" onclick="event.preventDefault();
                                                                document.getElementById('form-destroy-{{$student->id}}').submit()">Delete</span>
                    <form style="display:none" id="{{'form-destroy-'.$student->id}}" method="post" action="{{route('students.destroy',$student->id)}}">
                    @csrf
                    @method('delete')
                    </form></td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
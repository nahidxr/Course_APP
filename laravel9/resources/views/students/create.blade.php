@extends('layouts.app')
<hr>
@section('contents')
<h3> Course Enroll</h3>
<form action="{{ url('/students/store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control"  name="name"  value={{old('student_name')}}   >
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control"  name="email"  value={{old('student_email')}}   >
    </div>
    <div class="form-group">
      <label> Phone Number</label>
      <input type="number" class="form-control"  name="phone"  value={{old('student_number')}}   >
    </div>


    <div class="form-group">
        <label>Course Select</label>
        <select name="course_id" class="form-control"   >
            @foreach($allCourse as $course)
          <option value="{{ $course->id }}">{{ $course->name}}</option>
          @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection

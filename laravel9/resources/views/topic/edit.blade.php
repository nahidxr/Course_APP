
@extends('layouts.app')
<hr>
@section('contents')
<h3> Add new course</h3>
<form action="{{ url('/course/$course->id') }}" method="POST">
    @method("put")
    @csrf
    <div class="form-group">
      <label>name</label>
      <input type="text" class="form-control"  name="course_name"  value={{ $course->name }}   >
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control"  value="" name="course_description" >{{ $course->description }}</textarea>
    </div>
    <div class="form-group">
    <label>Fee</label>
    <input type="number" class="form-control"  name="course_fee"  value={{ $course->fee }}   >
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

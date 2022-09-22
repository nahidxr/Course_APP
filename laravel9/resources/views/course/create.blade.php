@extends('layouts.app')
<hr>
@section('contents')
<h3> Add new course</h3>
<form action="{{ url('/course/store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label>name</label>
      <input type="text" class="form-control"  name="course_name"  value={{old('course_name')}}   >
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control"  name="course_description" value={{old('course_description')}} ></textarea>
    </div>
    <div class="form-group">
        <label>Fee</label>
        <input type="text" class="form-control"  name="course_fee"  value={{old('course_fee')}}   >
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

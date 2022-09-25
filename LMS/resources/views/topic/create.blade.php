@extends('layouts.app')
<hr>
@section('contents')
<h3> Add Topic</h3>
<form action="{{ url('/topics/store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="form-group">
            <label>Course Select</label>
            <select name="course_id" class="form-control"   >
                @foreach($allCourse as $course)
              <option value="{{ $course->id }}">{{ $course->name}}</option>
              @endforeach
            </select>
        </div>
      <label>Topic name</label>
      <input type="text" class="form-control"  name="topic_name"  value={{old('topic_name')}}   >
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

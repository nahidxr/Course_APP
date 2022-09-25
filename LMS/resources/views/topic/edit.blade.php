
@extends('layouts.app')
<hr>
@section('contents')
<h3> Add new course</h3>
<form action="{{ url('/topics/$topic->id') }}" method="POST">
    @method("put")
    @csrf
    <div class="form-group">
      <label>Topic name</label>
      <input type="text" class="form-control"  name="topic_name"  value={{ $topic->name }}   >
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

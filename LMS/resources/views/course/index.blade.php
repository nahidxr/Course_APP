@extends('layouts.app')
@section('contents')
<a href="{{ url('/course/create') }}" class="btn btn-success">Add Course </a>
<hr>


<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Fee</th>
        <th>Action</th>
    </tr>
    @foreach ($course_list as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->fee }}</td>
        <td>
            <form action="{{ url("/course/$item->id") }}" method="POST" onsubmit="return confirm('Do you really want to Delete the value?');">
                @csrf
                @method('delete')
                <a href="{{ url("/course/$item->id/edit") }}" class="btn btn-warning bt-sm">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger bt-sm">
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection

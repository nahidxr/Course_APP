@extends('layouts.app')
@section('contents')
<a href="{{ url('/course/create') }}" class="btn btn-success">Add Course </a>
<hr>


<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach ($course_list as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a href="{{ url("/course/$item->id/edit") }}" class="btn btn-warning bt-sm">Update</a>
            {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
            <form action="{{ url("/course/$item->id") }}" method="POST"
                onsubmit="return confirm('Do you really want to Delete the value?');">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger bt-sm">
            </form>
        </td>
    </tr>
    @endforeach


</table>


@endsection

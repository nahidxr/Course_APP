@extends('layouts.app')
@section('contents')
<a href="{{ url('/students/create') }}" class="btn btn-success">Course Enroll </a>
<hr>


<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course Name</th>
        <th>Action</th>
    </tr>
    @foreach ($allStudent as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->course_name }}</td>
        <td>
            <form action="{{ url("/students/$item->id") }}" method="POST" onsubmit="return confirm('Do you really want to Delete the value?');">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger bt-sm">
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection

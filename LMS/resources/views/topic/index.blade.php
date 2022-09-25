@extends('layouts.app')
@section('contents')
<a href="{{ url('/topics/create') }}" class="btn btn-success">Add Topic </a>
<hr>


<table class="table table-bordered">
    <tr>
        <th>Topic Name</th>
        <th>Course Name</th>
        <th>Action</th>
    </tr>
    @foreach ($allTopic as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->course_name }}</td>

        <td>
            <form action="{{ url("/topics/$item->id") }}" method="POST" onsubmit="return confirm('Do you really want to Delete the value?');">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger bt-sm">
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection

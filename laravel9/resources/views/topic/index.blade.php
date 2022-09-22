@extends('layouts.app')
@section('contents')
<a href="{{ url('/topics/create') }}" class="btn btn-success">Add Course </a>
<hr>


<table class="table table-bordered">
    <tr>
        <th>Course Name</th>
        <th>Course Topic</th>

        <th>Action</th>
    </tr>
    @foreach ($topic_list as $item)
    <tr>
        <td>{{ $item->name }}</td>

        <td>
            <form action="{{ url("/topic/$item->id") }}" method="POST" onsubmit="return confirm('Do you really want to Delete the value?');">
                @csrf
                @method('delete')
                <a href="{{ url("/topic/$item->id/edit") }}" class="btn btn-warning bt-sm">Edit</a>
                <input type="submit" value="Delete" class="btn btn-danger bt-sm">
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection

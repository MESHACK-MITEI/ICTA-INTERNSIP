@extends('layouts.app')

@section('content')
<h2>Departments</h2>

<a href="{{ route('departments.create') }}">Add New Department</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Head</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $department->name }}</td>
            <td>{{ $department->department_head }}</td>
            <td>{{ $department->description }}</td>
            <td>
                <a href="{{ route('departments.show', $department->id) }}">View</a> |
                <a href="{{ route('departments.edit', $department->id) }}">Edit</a> |
 
                <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this department?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

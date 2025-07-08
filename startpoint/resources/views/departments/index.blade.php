@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Departments List</h2>
        <a href="{{ route('departments.create') }}" class="btn btn-success">+ Add Department</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Head</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($departments as $dept)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dept->name }}</td>
                    <td>{{ $dept->department_head }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($dept->description, 50) }}</td>
                    <td>
                        <a href="{{ route('departments.show', $dept->id) }}"
                           class="btn btn-info btn-sm me-1">
                            View
                        </a>
                        <a href="{{ route('departments.edit', $dept->id) }}"
                           class="btn btn-warning btn-sm me-1">
                            Edit
                        </a>
                        <form action="{{ route('departments.destroy', $dept->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Delete this department?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No departments found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

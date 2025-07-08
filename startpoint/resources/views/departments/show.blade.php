@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Department Details</h4>
            <a href="{{ route('departments.index') }}" class="btn btn-sm btn-light">← Back to List</a>
        </div>
        <div class="card-body">
            <h5><strong>Name:</strong> {{ $department->name }}</h5>
            <p><strong>Head:</strong> {{ $department->department_head ?? 'N/A' }}</p>
            <p><strong>Description:</strong><br>{{ $department->description ?? 'No description provided.' }}</p>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning me-2">✏️ Edit</a>
            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">🗑️ Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

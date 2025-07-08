@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Add New Department</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:<br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('departments.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" name="name" class="form-control" placeholder="e.g. ICT" required>
        </div>

        <div class="mb-3">
            <label for="department_head" class="form-label">Department Head</label>
            <input type="text" name="department_head" class="form-control" placeholder="e.g. John Doe">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Enter description..."></textarea>
        </div>

        <button type="submit" class="btn btn-success">Create Department</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

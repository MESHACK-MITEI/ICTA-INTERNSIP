@extends('layouts.app')

@section('content')
<h2>Edit Department</h2>

<form action="{{ route('departments.update', $department->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $department->name }}" required><br>

    <label>Head:</label>
    <input type="text" name="department_head" value="{{ $department->department_head }}"><br>

    <label>Description:</label>
    <textarea name="description">{{ $department->description }}</textarea><br>

    <button type="submit">Update</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<h2>Add New Department</h2>

<form action="{{ route('departments.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Head:</label>
    <input type="text" name="department_head"><br>

    <label>Description:</label>
    <textarea name="description"></textarea><br>

    <button type="submit">Create</button>
</form>
@endsection

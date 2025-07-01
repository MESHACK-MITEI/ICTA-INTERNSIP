@extends('layouts.app')

@section('content')
<h2>Department Details</h2>

<p><strong>Name:</strong> {{ $department->name }}</p>
<p><strong>Head:</strong> {{ $department->department_head }}</p>
<p><strong>Description:</strong> {{ $department->description }}</p>

<a href="{{ route('departments.edit', $department->id) }}">Edit</a>
@endsection

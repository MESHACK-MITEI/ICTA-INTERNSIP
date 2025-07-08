@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Applicant Details</h4>
        </div>
        <div class="card-body">
            <p><strong>Full Name:</strong> {{ $applicant->first_name }} {{ $applicant->middle_name }} {{ $applicant->last_name }}</p>
            <p><strong>Email Address:</strong> {{ $applicant->email_address }}</p>
            <p><strong>Phone Number:</strong> {{ $applicant->phone_number }}</p>
            <p><strong>Cohort:</strong> {{ $applicant->cohort ?? 'N/A' }}</p>
            <p><strong>Is Active:</strong> {{ $applicant->is_active ? 'Yes' : 'No' }}</p>
            <p><strong>Created By:</strong> {{ $applicant->created_by ?? 'N/A' }}</p>
            <p><strong>Created At:</strong> {{ $applicant->created_at->format('Y-m-d H:i') }}</p>
            <p><strong>Updated At:</strong> {{ $applicant->updated_at->format('Y-m-d H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('applicants.index') }}" class="btn btn-secondary">← Back to List</a>
            <a href="{{ route('applicants.edit', $applicant->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection

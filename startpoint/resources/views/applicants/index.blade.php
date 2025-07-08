@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Applicants List</h2>
        <a href="{{ route('applicants.create') }}" class="btn btn-primary">Add Applicant</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Cohort</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($applicants as $applicant)
            <tr>
                <td>{{ $applicant->first_name }} {{ $applicant->middle_name }} {{ $applicant->last_name }}</td>
                <td>{{ $applicant->email_address }}</td>
                <td>{{ $applicant->phone_number }}</td>
                <td>{{ $applicant->cohort }}</td>
                <td>{{ $applicant->is_active ? 'Yes' : 'No' }}</td>
                <td>
                    {{-- VIEW --}}
                    <a href="{{ route('applicants.show', $applicant->id) }}"
                       class="btn btn-sm btn-info text-white">
                        View
                    </a>

                    {{-- EDIT --}}
                    <a href="{{ route('applicants.edit', $applicant->id) }}"
                       class="btn btn-sm btn-warning">
                        Edit
                    </a>

                    {{-- DELETE --}}
                    <form action="{{ route('applicants.destroy', $applicant->id) }}"
                          method="POST" style="display:inline;"
                          onsubmit="return confirm('Delete this applicant?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6">No applicants found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

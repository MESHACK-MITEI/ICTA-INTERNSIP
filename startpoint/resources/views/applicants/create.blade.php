@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Create New Applicant</h4>
        </div>
        <div class="card-body">
            {{-- Display validation errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Please fix the following errors:
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('applicants.store') }}" method="POST">
                @csrf

                <div class="row">
                    {{-- Title --}}
                    <div class="col-md-3 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <select name="title" id="title" class="form-select" required>
                            <option value="">-- Select --</option>
                            <option value="Mr" {{ old('title')=='Mr' ? 'selected' : '' }}>Mr</option>
                            <option value="Ms" {{ old('title')=='Ms' ? 'selected' : '' }}>Ms</option>
                            <option value="Mrs" {{ old('title')=='Mrs' ? 'selected' : '' }}>Mrs</option>
                            <option value="Dr" {{ old('title')=='Dr' ? 'selected' : '' }}>Dr</option>
                            <option value="Prof" {{ old('title')=='Prof' ? 'selected' : '' }}>Prof</option>
                        </select>
                    </div>

                    {{-- First Name --}}
                    <div class="col-md-3 mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text"
                               name="first_name"
                               id="first_name"
                               class="form-control"
                               value="{{ old('first_name') }}"
                               required>
                    </div>

                    {{-- Middle Name --}}
                    <div class="col-md-3 mb-3">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text"
                               name="middle_name"
                               id="middle_name"
                               class="form-control"
                               value="{{ old('middle_name') }}">
                    </div>

                    {{-- Last Name --}}
                    <div class="col-md-3 mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text"
                               name="last_name"
                               id="last_name"
                               class="form-control"
                               value="{{ old('last_name') }}"
                               required>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-3">
                        <label for="email_address" class="form-label">Email Address</label>
                        <input type="email"
                               name="email_address"
                               id="email_address"
                               class="form-control"
                               value="{{ old('email_address') }}"
                               required>
                    </div>

                    {{-- Phone --}}
                    <div class="col-md-6 mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text"
                               name="phone_number"
                               id="phone_number"
                               class="form-control"
                               value="{{ old('phone_number') }}"
                               required>
                    </div>

                    {{-- Cohort --}}
                    <div class="col-md-6 mb-3">
                        <label for="cohort" class="form-label">Cohort</label>
                        <input type="text"
                               name="cohort"
                               id="cohort"
                               class="form-control"
                               value="{{ old('cohort') }}">
                    </div>

                    {{-- Is Active --}}
                    <div class="col-md-3 mb-3">
                        <label for="is_active" class="form-label">Is Active?</label>
                        <select name="is_active" id="is_active" class="form-select">
                            <option value="1" {{ old('is_active', '1')=='1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('is_active')=='0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    {{-- Created By --}}
                    <div class="col-md-3 mb-3">
                        <label for="created_by" class="form-label">Created By</label>
                        <input type="text"
                               name="created_by"
                               id="created_by"
                               class="form-control"
                               value="{{ old('created_by') }}">
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Save Applicant</button>
                    <a href="{{ route('applicants.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

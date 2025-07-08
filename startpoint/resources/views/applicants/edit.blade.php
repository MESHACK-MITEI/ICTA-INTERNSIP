@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4>Edit Applicant</h4>
            <a href="{{ route('applicants.index') }}" class="btn btn-light btn-sm">Back to List</a>
        </div>
        <div class="card-body">
            {{-- Validation Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Please fix the following errors:
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- Title --}}
                    <div class="col-md-3 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <select name="title" id="title" class="form-select" required>
                            <option value="">-- Select --</option>
                            @foreach(['Mr','Ms','Mrs','Dr','Prof'] as $t)
                                <option value="{{ $t }}" {{ old('title', $applicant->title)==$t ? 'selected' : '' }}>
                                    {{ $t }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- First Name --}}
                    <div class="col-md-3 mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text"
                               name="first_name"
                               id="first_name"
                               class="form-control"
                               value="{{ old('first_name', $applicant->first_name) }}"
                               required>
                    </div>

                    {{-- Middle Name --}}
                    <div class="col-md-3 mb-3">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text"
                               name="middle_name"
                               id="middle_name"
                               class="form-control"
                               value="{{ old('middle_name', $applicant->middle_name) }}">
                    </div>

                    {{-- Last Name --}}
                    <div class="col-md-3 mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text"
                               name="last_name"
                               id="last_name"
                               class="form-control"
                               value="{{ old('last_name', $applicant->last_name) }}"
                               required>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-3">
                        <label for="email_address" class="form-label">Email Address</label>
                        <input type="email"
                               name="email_address"
                               id="email_address"
                               class="form-control"
                               value="{{ old('email_address', $applicant->email_address) }}"
                               required>
                    </div>

                    {{-- Phone --}}
                    <div class="col-md-6 mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text"
                               name="phone_number"
                               id="phone_number"
                               class="form-control"
                               value="{{ old('phone_number', $applicant->phone_number) }}"
                               required>
                    </div>

                    {{-- Cohort --}}
                    <div class="col-md-6 mb-3">
                        <label for="cohort" class="form-label">Cohort</label>
                        <input type="text"
                               name="cohort"
                               id="cohort"
                               class="form-control"
                               value="{{ old('cohort', $applicant->cohort) }}">
                    </div>

                    {{-- Is Active --}}
                    <div class="col-md-3 mb-3">
                        <label for="is_active" class="form-label">Is Active?</label>
                        <select name="is_active" id="is_active" class="form-select">
                            <option value="1" {{ old('is_active', $applicant->is_active)==1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('is_active', $applicant->is_active)==0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    {{-- Created By --}}
                    <div class="col-md-3 mb-3">
                        <label for="created_by" class="form-label">Created By</label>
                        <input type="text"
                               name="created_by"
                               id="created_by"
                               class="form-control"
                               value="{{ old('created_by', $applicant->created_by) }}">
                    </div>

                    {{-- Optional: Password (if collecting) --}}
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control"
                               placeholder="Leave blank to keep existing">
                        <small class="text-muted">Leave blank to keep current password.</small>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Applicant</button>
                    <a href="{{ route('applicants.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

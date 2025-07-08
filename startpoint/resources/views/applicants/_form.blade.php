@csrf
<label>First Name:</label>
<input type="text" name="first_name" value="{{ old('first_name', $applicant->first_name ?? '') }}" required><br>

<label>Middle Name:</label>
<input type="text" name="middle_name" value="{{ old('middle_name', $applicant->middle_name ?? '') }}"><br>

<label>Last Name:</label>
<input type="text" name="last_name" value="{{ old('last_name', $applicant->last_name ?? '') }}" required><br>

<label>Email Address:</label>
<input type="email" name="email_address" value="{{ old('email_address', $applicant->email_address ?? '') }}" required><br>

<label>Phone Number:</label>
<input type="text" name="phone_number" value="{{ old('phone_number', $applicant->phone_number ?? '') }}" required><br>

<label>Cohort:</label>
<input type="text" name="cohort" value="{{ old('cohort', $applicant->cohort ?? '') }}"><br>

<label>Is Active:</label>
<input type="checkbox" name="is_active" value="1" {{ (old('is_active', $applicant->is_active ?? false)) ? 'checked' : '' }}><br>

<label>Created By:</label>
<input type="text" name="created_by" value="{{ old('created_by', $applicant->created_by ?? '') }}"><br>

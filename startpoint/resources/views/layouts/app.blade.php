<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ICTA Internship System </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">StartPoint</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="adminNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{ route('applicants.index') }}">Applicants</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('departments.index') }}">Departments</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('opportunities.index') }}">Opportunities</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('titles.index') }}">Titles</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('cohorts.index') }}">Cohorts</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('opportunity-types.index') }}">Opportunity Types</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('compensation-types.index') }}">Compensation Types</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('documents.index') }}">Documents</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('opportunity-users.index') }}">Applications</a></li>
      </ul>
      {{-- Optionally, add user/account menu on the right --}}
      <ul class="navbar-nav">
        {{-- <li class="nav-item"><a class="nav-link" href="#">Profile</a></li> --}}
        {{-- <li class="nav-item"><a class="nav-link" href="#">Logout</a></li> --}}
      </ul>
    </div>
  </div>
</nav>

<main class="container my-4">
  @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>ICTA Internship System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">StartPoint</a>
        <div>
            <a href="{{ route('departments.index') }}" class="nav-link d-inline" >Departments</a>
            <a href="{{ route('applicants.index') }}" class="nav-link d-inline">Applicants</a>
            <a href="{{ route('opportunities.index') }}" class="nav-link d-inline">Opportunities</a>
            <!-- Add other links here -->
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Management System</title>
    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }
        .navbar-brand h2 {
            color: #7386D5;
        }
        .sidebar {
            background-color: #7386D5;
            color: #fff;
            min-height: 100vh;
            transition: all 0.3s;
        }
        .sidebar a {
            display: block;
            color: inherit;
            padding: 16px;
            text-decoration: none;
            transition: all 0.3s;
        }
        .sidebar a.active {
            background: #6d7fcc;
        }
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
        .content {
            padding: 20px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a { float: left; }
            div.content { margin-left: 0; }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><h2>Student Management System</h2></a>
                    <div class="ms-auto text-center d-flex flex-column align-items-center">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Institution Logo" style="height: 40px;">
                        <h6>CBSE | NEET | JEE</h6>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <!-- Home Link with active class for home page -->
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/students') }}" class="{{ request()->is('students') ? 'active' : '' }}">Student</a>
                <a href="{{ url('/teachers') }}" class="{{ request()->is('teachers') ? 'active' : '' }}">Teacher</a>
                <a href="{{ url('/courses') }}" class="{{ request()->is('courses') ? 'active' : '' }}">Courses</a>
                <a href="{{ url('/batches') }}" class="{{ request()->is('batches') ? 'active' : '' }}">Batches</a>
                <a href="{{ url('/enrollments') }}" class="{{ request()->is('enrollments') ? 'active' : '' }}">Enrollment</a>
                <a href="{{ url('/payments') }}" class="{{ request()->is('payments') ? 'active' : '' }}">Payment</a>
            </div>
        </div>

        <div class="col-md-9 content">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>

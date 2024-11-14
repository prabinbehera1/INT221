@extends('layout')

@section('content')
    <!-- Home Page Content -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1>Help Students Reach Their Potential</h1>
            <p class="text-gray-600 mb-6">
                At our institution, we are dedicated to providing a nurturing environment where students can flourish academically, socially, and personally. With a dedicated faculty, a comprehensive curriculum, and a focus on individual growth, we strive to equip every student with the skills and knowledge they need to succeed in their educational journey. Whether preparing for competitive exams like NEET and JEE or advancing in their CBSE studies, our goal is to ensure that every student has the resources, support, and encouragement they need to reach their full potential.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/student.png') }}" alt="Student" class="img-fluid rounded">
        </div>
    </div>
@endsection

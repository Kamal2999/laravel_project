@extends('pages.layout')
@section('title')
About 
@endsection
@section('content')

<div class="container-fluid bg-secondary text-white text-center py-5">
    <h1>About Us</h1>
    <p class="lead">Learn more about who we are and what we do</p>
</div>

<!-- Mission & Vision Section -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-6">
            <h2>Our Mission</h2>
            <p class="lead">To provide the best products and services that improve our customers' lives.</p>
        </div>
        <div class="col-md-6">
            <h2>Our Vision</h2>
            <p class="lead">To be a global leader in delivering innovative solutions for a sustainable future.</p>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="container">
    <h2 class="text-center my-5">Meet Our Team</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member 1">
                <div class="card-body">
                    <h5 class="card-title">Jane Doe</h5>
                    <p class="card-text">CEO</p>
                    <p class="card-text">Jane is a visionary leader with over 20 years of experience in the industry.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member 2">
                <div class="card-body">
                    <h5 class="card-title">John Smith</h5>
                    <p class="card-text">CTO</p>
                    <p class="card-text">John is the tech mastermind behind our innovative solutions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member 3">
                <div class="card-body">
                    <h5 class="card-title">Emily Davis</h5>
                    <p class="card-text">CFO</p>
                    <p class="card-text">Emily ensures our financial success and strategic growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('pages.layout')
@section('title')
Service 
@endsection
@section('content')
<div class="container-fluid bg-info text-white text-center py-5">
    <h1>Our Services</h1>
    <p class="lead">Explore what we offer to help your business thrive</p>
</div>

<!-- Services Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">What We Offer</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">We build modern, responsive, and efficient websites to boost your online presence.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Mobile App Development</h5>
                    <p class="card-text">Our team crafts user-friendly mobile apps tailored to your business needs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Digital Marketing</h5>
                    <p class="card-text">We deliver powerful marketing strategies to help grow your audience.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">SEO Services</h5>
                    <p class="card-text">Our SEO experts help your website rank higher and drive organic traffic.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">E-commerce Solutions</h5>
                    <p class="card-text">We create tailored e-commerce platforms to streamline your online business operations.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Graphic Design</h5>
                    <p class="card-text">Our designers create visually stunning content to elevate your brand identity.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call-to-Action Section -->
<div class="container-fluid bg-secondary text-white text-center py-5">
    <h2>Ready to work with us?</h2>
    <p class="lead">Contact us today to discuss how we can help your business succeed!</p>
    <a href="contact.html" class="btn btn-light btn-lg">Get in Touch</a>
</div>
@endsection
@extends('pages.layout')
@section('title')
Home
@endsection
@section('content')

<div class="container-fluid bg-primary text-white text-center py-5">
    <h1>Welcome to Our Website</h1>
    <p class="lead">Your satisfaction is our priority</p>
    <a href={{ route('register_page')}} class="btn btn-light btn-lg">Get Started</a>
</div>

<!-- Features Section -->
<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Description of Feature 1</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Description of Feature 2</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Description of Feature 3</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
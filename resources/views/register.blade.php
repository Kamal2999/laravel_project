@extends('pages.layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-center register header mb-4">Register</h2>
    @if (session('message'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('message') }}
    </div>
@endif
    
    <!-- Registration Form -->
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label register-label">Name</label>
            <input type="text" class="form-control register-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label register-label">Email</label>
            <input type="email" class="form-control register-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label register-label">Phone</label>
            <input type="text" class="form-control register-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        
        <div class="mb-3">
            <label for="city" class="form-label register-label">City</label>
            <input type="text" class="form-control register-control" id="city" name="city" placeholder="Enter your city" required>
        </div>

        <!-- Submit Button -->
        <div class="d-grid login-main mt-5">
            <button type="submit" class="btn btn-primary login-btn ">Register</button>
        </div>
    </form>
</div>
@endsection


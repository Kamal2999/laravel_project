@extends('pages.layout')
@section('title')
    Edit User Data
@endsection
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit User List</h2>
        @if (session('message'))
                <div class="alert alert-{{ session('type') }}">
                    {{ session('message') }}
                </div>
            @endif
        <!-- Form to Submit Data -->
        <form action="{{ route('users.update', $id) }}" method="POST">
            @csrf
            {{-- @method('POST') <!-- Consider using PUT if that's what you intend to do --> --}}

            <!-- Bootstrap Table with Form Inputs -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>

                            <!-- Name Input -->
                            <td>
                                <input type="text" name="users[{{ $user->id }}][name]" class="form-control" value="{{ $user->name }}" required>
                            </td>

                            <!-- Email Input -->
                            <td>
                                <input type="email" name="users[{{ $user->id }}][email]" class="form-control" value="{{ $user->email }}" required>
                            </td>

                            <!-- City Input -->
                            <td>
                                <input type="text" name="users[{{ $user->id }}][city]" class="form-control" value="{{ $user->city }}" required>
                            </td>

                            <!-- Phone Input -->
                            <td>
                                <input type="text" name="users[{{ $user->id }}][phone]" class="form-control" value="{{ $user->phone }}" required>
                            </td>

                            <!-- Created Date (Static) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Submit Button -->
            {{-- <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div> --}}
        </form>
    </div>
@endsection
{{-- @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif --}}


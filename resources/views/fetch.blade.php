@extends('pages.layout')
@section('title')
User-Data
@endsection
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">User List</h2>
        
        <!-- Bootstrap Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><a href=" {{ route('fetch_data' , ['id' => $user->id])}} " class="btn btn-primary">View</a></td>
                        <td><a href=" {{ route('form/' , ['id' => $user->id])}} " class="btn btn-warning">Edit</a></td>
                        <td><a href=" {{ route('delete.data' , ['id' => $user->id])}} " class="btn btn-danger">Delete</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

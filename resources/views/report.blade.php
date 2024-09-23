@extends('pages.layout')
@section('title', $title)
@section('content')
    <div class="container mt-5">
        <!-- Header -->
        <h2 class="text-center mb-4">{{ $header }}</h2>

        <form action={{ $path }} method="GET" class="mb-4">
            {!! $field !!}
        </form>

        <!-- Bootstrap Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="table-dark">
                    {!! $thead !!}
                </thead>
                <tbody>
                    @foreach ($tbody as $row)
                        {!! $row !!}
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links (Bootstrap styled) -->
        {{-- <div class="d-flex justify-content-center mt-4"> --}}
        {{ $records->links() }}
        {{-- </div> --}}
    </div>
@endsection

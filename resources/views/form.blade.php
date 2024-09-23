@extends('pages.layout')
@section('title', $title)
@section('content')
    <header>
        <h1 class="header">{{ $header }}</h1>
    </header>
    <div class="main-content">
        <div class="container">
            @if (session('message'))
                <div class="alert alert-{{ session('type') }}">
                    {{ session('message') }}
                </div>
            @endif
            {!! $form_open !!}
                @csrf
                @foreach ($form as $key => $formField)
                    <div class="form-group">
                        {!! $formField !!}
                        @error($key)
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endforeach
                @foreach ($form_button as $btn )
                    <div class="form-group">
                        {!! $btn !!}
                    </div>
                @endforeach
            {!! Form::close() !!}
        </div>
    </div>
@endsection

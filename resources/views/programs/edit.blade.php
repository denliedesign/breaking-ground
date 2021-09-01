@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">
        <form action="{{ route('programs.update', ['program' => $program]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('programs.form')
        </form>
    </div>

@endsection

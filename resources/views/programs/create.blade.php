@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">
        @include('/programs/form')
    </div>

@endsection

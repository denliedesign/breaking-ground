@extends('layouts.app')
@section('banner-image', 'calendar-of-events.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">
        <form action="{{ route('headings.update', ['heading' => $heading]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('headings.edit-form')
        </form>
    </div>

@endsection

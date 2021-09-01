@extends('layouts.app')
@section('banner-image', 'calendar-of-events.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">
        <form action="{{ route('tables.update', ['table' => $table]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('tables.edit-form')
        </form>
    </div>

@endsection

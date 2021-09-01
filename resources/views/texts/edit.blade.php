@extends('layouts.app')
@section('banner-image', 'parties.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">
        <form action="{{ route('texts.update', ['text' => $text]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('texts.edit-form')
        </form>
    </div>

@endsection

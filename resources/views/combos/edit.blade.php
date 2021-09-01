@extends('layouts.app')
@section('banner-image', 'instructors.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">
        <form action="{{ route('combos.update', ['combo' => $combo]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('combos.edit-form')
        </form>
    </div>

@endsection

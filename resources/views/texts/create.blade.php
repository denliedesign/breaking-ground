@extends('layouts.app')
@section('banner-image', 'parties.jpg')

@section('content')

    @include('banner')

    <div class="container py-5">

        @include('/texts/form')

    </div>

@endsection

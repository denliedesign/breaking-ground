@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">
            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Live Stream</span></h1>
            <div class="row">
                <div class="col-sm">
                    Studio 1
                    <iframe type="text/html" frameborder="0" width="100%" height="394" src="//video.nest.com/embedded/live/kLImUWdI85?autoplay=1" allowfullscreen></iframe>
                </div>
                <div class="col-sm">
                    Studio 2
                    <iframe type="text/html" frameborder="0" width="100%" height="394" src="//video.nest.com/embedded/live/ojAloVYEFT?autoplay=1" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Studio 3
                    <iframe type="text/html" frameborder="0" width="100%" height="394" src="//video.nest.com/embedded/live/8LuZM6aAmj?autoplay=1" allowfullscreen></iframe>
                </div>
                <div class="col-sm">
                    Studio 4
                    <iframe type="text/html" frameborder="0" width="100%" height="394" src="//video.nest.com/embedded/live/mn1qUFnv5K?autoplay=1" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    Studio 5
                    <iframe type="text/html" frameborder="0" width="100%" height="394" src="//video.nest.com/embedded/live/jwQJXvip7L?autoplay=1" allowfullscreen></iframe>
                </div>
                <div class="col-sm">
                    Studio 6
                    <iframe type="text/html" frameborder="0" width="100%" height="394" src="//video.nest.com/embedded/live/HqkotKib8T?autoplay=1" allowfullscreen></iframe>
                </div>
            </div>

            {{--            @can('update', \App\Text::class)--}}
{{--                <div id="livestream-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">--}}
{{--                    <span class="fw-bold mx-3">livestream text section A</span>--}}
{{--                    <!-- Button trigger modal -->--}}
{{--                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"--}}
{{--                            onClick="AddTextName('livestream'); AddTextSection('A');">--}}
{{--                        Create New--}}
{{--                    </button>--}}
{{--                    @include('/texts/form')--}}
{{--                </div>--}}
{{--            @endcan--}}
{{--            @foreach($texts as $text)--}}
{{--                @if($text->name == 'livestream' && $text->section == 'A')--}}
{{--                    <div class="my-5">--}}
{{--                        {!! $text->content !!}--}}
{{--                        @include('/texts/admin')--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}

        </div>
    </div>

@endsection

@extends('layouts.app')
@section('banner-image', 'banner-parties.png')
@section('register-link', 'https://s23jdkmq.pages.infusionsoft.net/')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <x-heading title="BG Parties!" />
        {{--            <h2 class="text-center fw-bold mb-5">In-Studio & Virtual Parties available!</h2>--}}

        <!-- IMAGE CONTROL -->
            @can('update', \App\Photo::class)
                <div id="parties-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">parties photo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('parties'); AddPhotoSection('A');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            @foreach($photos as $photo)
                @if($photo->photoName == 'parties' && $photo->photoSection == 'A')
                    <div class="d-flex justify-content-center my-3">
                        <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid">
                        @include('/photos/admin')
                    </div>
                @endif
            @endforeach
        <!-- END IMAGE CONTROL -->

            {{--            <div class="d-flex justify-content-center my-5">--}}
            {{--                <img src="/images/parties-bgdc.png" alt="parties brochure" class="img-fluid">--}}
            {{--            </div>--}}

            @can('update', \App\Text::class)
                <div id="parties-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">parties text section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                            onClick="AddTextName('parties'); AddTextSection('A');">
                        Create New
                    </button>
                    @include('/texts/form')
                </div>
            @endcan
            @foreach($texts as $text)
                @if($text->name == 'parties' && $text->section == 'A')
                    <div class="my-5">
                        {!! $text->content !!}
                        @include('/texts/admin')
                    </div>
                @endif
            @endforeach

        <!-- IMAGE CONTROL -->
            @can('update', \App\Photo::class)
                <div id="parties-photo-b" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">parties photo section B</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('parties'); AddPhotoSection('B');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            <div class="row mt-3" style="margin: 0 auto;">
                @foreach($photos as $photo)
                    @if($photo->photoName == 'parties' && $photo->photoSection == 'B')
                        <div class="col d-flex justify-content-center my-3">
                            <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid" style="max-height: 200px; max-width: 200px;">
                            @include('/photos/admin')
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- END IMAGE CONTROL -->

        {{--            @can('update', \App\Text::class)--}}
        {{--                <div id="parties-text-b" style="border:2px solid yellow;" class="my-3 py-1 rounded shadow">--}}
        {{--                    <span class="fw-bold mx-3">parties text section B</span>--}}
        {{--                    <!-- Button trigger modal -->--}}
        {{--                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"--}}
        {{--                            onClick="AddTextName('parties'); AddTextSection('B');">--}}
        {{--                        Create New--}}
        {{--                    </button>--}}
        {{--                    @include('/texts/form')--}}
        {{--                </div>--}}
        {{--            @endcan--}}
        {{--            @foreach($texts as $text)--}}
        {{--                @if($text->name == 'parties' && $text->section == 'B')--}}
        {{--                    <div>--}}
        {{--                        {{ $text->content }}--}}
        {{--                        @include('/texts/admin')--}}
        {{--                    </div>--}}
        {{--                @endif--}}
        {{--            @endforeach--}}


    </div>


@endsection

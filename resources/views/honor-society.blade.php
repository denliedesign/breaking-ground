@extends('layouts.app')
@section('banner-image', 'honor-society.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Honor Society</span></h1>

            <div class="row">
                <div class="col-sm">
                    @can('update', \App\Text::class)
                        <div id="honor-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">honor text section A</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                    onClick="AddTextName('honor'); AddTextSection('A');">
                                Create New
                            </button>
                            @include('/texts/form')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->name == 'honor' && $text->section == 'A')
                            <div class="my-5">
                                {!! $text->content !!}
                                @include('/texts/admin')
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm">
                    <!-- IMAGE CONTROL -->
                    @can('update', \App\Photo::class)
                        <div id="honor-photo-b" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">honor photo section B</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                                    onClick="AddPhotoName('honor'); AddPhotoSection('B');">
                                Add New
                            </button>
                            @include('/photos/form')
                        </div>
                    @endcan
                    <h5 class="text-center fw-bold"><em>In Association With</em></h5>
                        @foreach($photos as $photo)
                            @if($photo->photoName == 'honor' && $photo->photoSection == 'B')
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid">
                                </div>
                                @include('/photos/admin')
                            @endif
                        @endforeach
                    <!-- END IMAGE CONTROL -->
                </div>
            </div>


        </div>
    </div>

@endsection

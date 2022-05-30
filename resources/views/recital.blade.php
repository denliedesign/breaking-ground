@extends('layouts.app')
@section('banner-image', 'news-bgdc.png')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Recital</span></h1>
            <div>
                <div class="d-flex justify-content-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLJZF4G4Fi27yTaYsEdTi32lAuuSZ707ZD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

{{--                <!-- IMAGE CONTROL -->--}}
{{--                @can('update', \App\Photo::class)--}}
{{--                    <div id="news-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">--}}
{{--                        <span class="fw-bold mx-3">news photo section A</span>--}}
{{--                        <!-- Button trigger modal -->--}}
{{--                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"--}}
{{--                                onClick="AddPhotoName('news'); AddPhotoSection('A');">--}}
{{--                            Add New--}}
{{--                        </button>--}}
{{--                        @include('/photos/form')--}}
{{--                    </div>--}}
{{--                @endcan--}}
{{--                @foreach($photos as $photo)--}}
{{--                    @if($photo->photoName == 'news' && $photo->photoSection == 'A')--}}
{{--                        <div class="container">--}}
{{--                            <div class="d-flex justify-content-center m-1">--}}
{{--                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid">--}}
{{--                                @include('/photos/admin')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--            <!-- END IMAGE CONTROL -->--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <a class="main-button shadow" href="https://sites.google.com/view/breaking-ground-recital-2022/home?authuser=0" target="_blank">Learn More!</a>--}}
{{--                </div>--}}
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-sm">--}}
{{--                    <img src="/images/health-1.png" alt="health procedures" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-sm">--}}
{{--                    <img src="/images/health-2.png" alt="studio map" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection

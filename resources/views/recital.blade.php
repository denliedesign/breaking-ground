@extends('layouts.app')
@section('banner-image', 'news-bgdc.png')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

{{--            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Recital</span></h1>--}}
{{--            <div>--}}
{{--                <div class="d-flex justify-content-center my-3">--}}
{{--                    <a href="https://sites.google.com/view/breaking-ground-recital-2023/home" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Recital Portal</div></a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <iframe width="744.8" height="418.95" src="https://www.youtube.com/embed/khfFEKuDfhE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                </div>--}}

                <div class="container d-flex d-inline">
                    @can('update', \App\Combo::class)
                        <div id="recital-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">Recital Page Controls</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                                    onClick="AddComboName('recital'); AddComboSection('A');">
                                Add New
                            </button>
                            @include('/combos/form')
                        </div>
                    @endcan
                </div>
                <div>
                    @foreach($combos as $combo)
                        @if($combo->comboName == 'recital' && $combo->comboSection == 'A')
                            <div>
                                @if($combo->comboContent)
                                    <p class="text-center my-2 py-0" style="text-align: center !important;">{!! $combo->comboContent !!}</p>
                                    @endif
                                @if($combo->comboBtn)
                                       <div class="d-flex justify-content-center my-2">
                                           <a href="{{ $combo->comboUrl }}" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">{{ $combo->comboBtn }}</div></a>
                                       </div>
                                   @endif
                                    @if($combo->comboTitle)
                                        <div class="d-flex justify-content-center my-2">
                                            {!! $combo->comboTitle !!}
                                        </div>
                                        @endif
                                    @if($combo->comboImage)
                                        <div class="d-flex justify-content-center my-2">
                                            <img src="{{ asset('/storage/' . $combo->comboImage) }}" class="img-fluid" alt="...">
                                        </div>
                                    @endif
                                <div>@include('/combos/admin')</div>
                            </div>
                        @endif
                    @endforeach
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

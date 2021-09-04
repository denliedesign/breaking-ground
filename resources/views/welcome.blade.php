@extends('layouts.app')

@section('content')

    <div class="container d-flex d-inline">
        @can('update', \App\Combo::class)
            <div id="main-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">First Slider Only</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('main'); AddComboSection('A');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
            <div id="main-combo-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">All Other Sliders</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('main'); AddComboSection('B');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
        @endcan
    </div>

    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($combos as $combo)
                @if($combo->comboName == 'main' && $combo->comboSection == 'A')
                <div class="carousel-item active" style="position: relative;">
                    <a href="{{ $combo->comboTitle }}"><img src="{{ asset('/storage/' . $combo->comboImage) }}" class="d-block w-100" alt="..."></a>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">@include('/combos/admin')</div>
                </div>
                @endif
                @if($combo->comboName == 'main' && $combo->comboSection == 'B')
                <div class="carousel-item">
                    <a href="{{ $combo->comboTitle }}"><img src="{{ asset('/storage/' . $combo->comboImage) }}" class="d-block w-100" alt="..."></a>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">@include('/combos/admin')</div>
                </div>
                    @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <!-- WELCOME COMBO CONTROL -->
        @can('update', \App\Combo::class)
            <div id="welcome-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">welcome combo section a</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('welcome'); AddComboSection('A');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
        @endcan

            @foreach($combos as $combo)
                @if($combo->comboName == 'welcome' && $combo->comboSection == 'A')
                    <div class="row my-4">
                        @include('/combos/admin')
                        <div class="col-sm">
                            <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm">
                            <h2 class="text-uppercase" style="color: #dd3333;">{{ $combo->comboTitle }}</h2>

                            {!! $combo->comboContent !!}

                        </div>
                    </div>
                @endif
            @endforeach
        <!-- END WELCOME COMBO CONTROL -->
    </div>

    <div style="background: #dd3333;" class="text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex justify-content-center align-items-center">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/hxNx0jQAA4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm">
                    <h2 class="text-center">BGDC IS A SAFER STUDIO™</h2>
                    <div class="d-flex justify-content-center my-2">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="max-height: 200px; width: auto;">
                    </div>
                    <p class="text-center">
                        During the Coronavirus (COVID-19) pandemic, MTJGD™ recommends all members use a phased approach to reopening physical services, based on the latest government guidance, as well as regional and local orders. MTJGD™ recommends all members develop and clearly communicate a “Safer Studio Plan” to address any operational changes, precautionary measures, and policy adjustments being made to facilitate the safest possible return to in-person services.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div style="background: #f4f4f4;">
        <div class="container">
            <!-- AWARDS PHOTO CONTROL -->
            @can('update', \App\Photo::class)
                <div id="welcome-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">welcome photo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('welcome'); AddPhotoSection('A');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            <div class="row mt-3">
                @foreach($photos as $photo)
                    @if($photo->photoName == 'welcome' && $photo->photoSection == 'A')
                        <div class="col d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="" style="max-height: 200px; width: auto;">
                                @include('/photos/admin')
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- END AWARDS PHOTO CONTROL -->
            <!-- PARTNER PHOTO CONTROL -->
            @can('update', \App\Photo::class)
                <div id="welcome-photo-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">welcome photo section B</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('welcome'); AddPhotoSection('B');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            <div class="row my-3">
                @foreach($photos as $photo)
                    @if($photo->photoName == 'welcome' && $photo->photoSection == 'B')
                        <div class="col d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="" style="max-height: 200px; width: auto;">
                                @include('/photos/admin')
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- END PARTNER PHOTO CONTROL -->
        </div>
    </div>




@endsection

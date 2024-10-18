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

{{--            <div>--}}
{{--                <iframe--}}

{{--                    src="https://link.enrollio.ai/widget/form/J6dOmGhnqKCbpw5Z9My5"--}}

{{--                    style="width:100%;height:100%;border:none;border-radius:3px"--}}

{{--                    id="inline-J6dOmGhnqKCbpw5Z9My5"--}}

{{--                    data-layout="{'id':'INLINE'}"--}}

{{--                    data-trigger-type="alwaysShow"--}}

{{--                    data-trigger-value=""--}}

{{--                    data-activation-type="alwaysActivated"--}}

{{--                    data-activation-value=""--}}

{{--                    data-deactivation-type="neverDeactivate"--}}

{{--                    data-deactivation-value=""--}}

{{--                    data-form-name="Birthday Party Form"--}}

{{--                    data-height="864"--}}

{{--                    data-layout-iframe-id="inline-J6dOmGhnqKCbpw5Z9My5"--}}

{{--                    data-form-id="J6dOmGhnqKCbpw5Z9My5"--}}

{{--                    title="Birthday Party Form"--}}

{{--                >--}}

{{--                </iframe>--}}

{{--                <script src="https://link.enrollio.ai/js/form_embed.js"></script>--}}
{{--            </div>--}}
            <div>
                <iframe src="https://link.enrollio.ai/widget/booking/1GTJfCymZe298SvX7L2d" style="width: 100%;border:none;overflow: hidden;" scrolling="no" id="1GTJfCymZe298SvX7L2d_1728406835066"></iframe><br><script src="https://link.enrollio.ai/js/form_embed.js" type="text/javascript"></script>
            </div>

            <div class="container d-flex d-inline">
                @can('update', \App\Combo::class)
                    <div id="parties-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">First Slider Only</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                                onClick="AddComboName('parties'); AddComboSection('A');">
                            Add New
                        </button>
                        @include('/combos/form')
                    </div>
                    <div id="parties-combo-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">All Other Sliders</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                                onClick="AddComboName('parties'); AddComboSection('B');">
                            Add New
                        </button>
                        @include('/combos/form')
                    </div>
                @endcan
            </div>

            <div id="partiesSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($combos as $combo)
                        @if($combo->comboName == 'parties' && $combo->comboSection == 'A')
                            <div class="carousel-item active" style="position: relative;">
                                <a href="{{ $combo->comboTitle }}"><img src="{{ asset('/storage/' . $combo->comboImage) }}" class="d-block w-100" alt="..."></a>
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">@include('/combos/admin')</div>
                            </div>
                        @endif
                        @if($combo->comboName == 'parties' && $combo->comboSection == 'B')
                            <div class="carousel-item">
                                <a href="{{ $combo->comboTitle }}"><img src="{{ asset('/storage/' . $combo->comboImage) }}" class="d-block w-100" alt="..."></a>
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">@include('/combos/admin')</div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#partiesSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partiesSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- IMAGE CONTROL -->
{{--            @can('update', \App\Photo::class)--}}
{{--                <div id="parties-photo-b" style="border:2px solid red;" class="my-3 py-1 rounded shadow">--}}
{{--                    <span class="fw-bold mx-3">parties photo section B</span>--}}
{{--                    <!-- Button trigger modal -->--}}
{{--                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"--}}
{{--                            onClick="AddPhotoName('parties'); AddPhotoSection('B');">--}}
{{--                        Add New--}}
{{--                    </button>--}}
{{--                    @include('/photos/form')--}}
{{--                </div>--}}
{{--            @endcan--}}
{{--            <div class="row mt-3" style="margin: 0 auto;">--}}
{{--                @foreach($photos as $photo)--}}
{{--                    @if($photo->photoName == 'parties' && $photo->photoSection == 'B')--}}
{{--                        <div class="col d-flex justify-content-center my-3">--}}
{{--                            <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid" style="max-height: 200px; max-width: 200px;">--}}
{{--                            @include('/photos/admin')--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
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

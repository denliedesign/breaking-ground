@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')
@section('register-link', 'https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1')

@section('content')

    <div class="banner-wrap">
        <div class="banner">
            <img src="{{ asset('/storage/' . $program->programBanner) }}" alt="banner" style="width: 100%; height: auto;">
        </div>
    </div>


    <div class="container py-5">

        <div class="d-flex justify-content-center">
            {{--            <video width="320" height="180" controls>--}}
            {{--                <source src="{{ asset('/storage/' . $program->programVideo) }}" type="video/mp4">--}}
            {{--            </video>--}}
            <div>
                {!! $program->programVideo !!}
            </div>
        </div>

        <div class="text-center">
            <h1 class="text-center my-5"><span class="pages-heading px-5 py-3">{{ $program->programTitle }}</span></h1>
            <p>{!! $program->programDescription !!}</p>
        </div>



        <!-- ADDING ANOTHER IMAGE CONTROL HERE FOR TUITION BANNER -->

        <!-- CONTROLS -->
        @can('update', \App\Photo::class)
            <div id="program-tuition-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">program tuition photo section A</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                        onClick="AddPhotoName('write-slug-here'); AddPhotoSection('t');">
                    Add New
                </button>
                @include('/photos/form')
            </div>
        @endcan
    <!-- END CONTROLS -->
        <!-- SHOW -->

        <div class="my-3">
            @foreach($photos as $photo)
                @if($photo->photoName == $program->slug && $photo->photoSection == 't')
                    <div>
                        <img src="{{ asset('/storage/' . $photo->image) }}" alt="" style="width: 100%;">
                        @include('/photos/admin')
                    </div>
                @endif
            @endforeach
        </div>

        <!-- END SHOW -->
        <!-- END OF TUITION BANNER -->



        <div class="row">
            <div class="col-sm">
                <!-- TABLE CONTROL -->
                @can('update', \App\Table::class)
                    <div id="programs-table" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">heading table section</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#headingModal"
                                onClick="AddHeadingName('programs'); AddHeadingSection('{{ $program->id }}');">
                            Add Heading
                        </button>
                        @include('/headings/form')
                    </div>
                    <div id="programs-table" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">programs table section</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                {{--                                onClick="AddTableName('{{ substr(request()->route()->uri, 0, 8) }}'); AddTableSection('{{ $program->id }}');">--}}
                                onClick="AddTableName('programs'); AddTableSection('{{ $program->id }}');">
                            Add New Row
                        </button>
                        @include('/tables/form')
                    </div>
            @endcan
            <!-- END TABLE CONTROL -->

                <table class="table mb-0">
                    @foreach($headings as $heading)
                        @if($heading->headingName == 'programs' && $heading->headingSection == "$program->id")
                            <h2 class="table-title">{{ $heading->title }}</h2>
                            @include('/headings/admin')
                            @if($heading->head1 == true)
                                <thead>
                                <tr class="table-head">
                                    <th>{{ $heading->head1 }}</th>
                                    <th>{{ $heading->head2 }}</th>
                                    <th>{{ $heading->head3 }}</th>
                                    <th>{{ $heading->head4 }}</th>
                                </tr>
                                </thead>
                            @endif
                        @endif
                    @endforeach

                    @livewire('tables-table', ['program' => $program])
                </table>
            </div>
            @if($program->id == 3)
                <div class="col-sm">
                    <!-- TABLE CONTROL -->
                    @can('update', \App\Table::class)
                        <div id="programs-table" style="border:2px solid purple;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">second heading table section</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#headingModal"
                                    onClick="AddHeadingName('programs'); AddHeadingSection('Z');">
                                Add Heading
                            </button>
                            @include('/headings/form')
                        </div>
                        <div id="programs-table-b" style="border:2px solid purple;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">second table section</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                    onClick="AddTableName('programs'); AddTableSection('Z');">
                                Add New Row
                            </button>
                            @include('/tables/form')
                        </div>
                    @endcan
                    <table class="table mb-0">
                        @foreach($headings as $heading)
                            @if($heading->headingName == 'programs' && $heading->headingSection == "Z")
                                <h2 class="table-title">{{ $heading->title }}</h2>
                                @include('/headings/admin')
                                @if($heading->head1 == true)
                                    <thead>
                                    <tr class="table-head">
                                        <th>{{ $heading->head1 }}</th>
                                        <th>{{ $heading->head2 }}</th>
                                        <th>{{ $heading->head3 }}</th>
                                        <th>{{ $heading->head4 }}</th>
                                    </tr>
                                    </thead>
                                @endif
                            @endif
                        @endforeach

                        @livewire('doubles-table', ['program' => $program])
                    </table>
                </div>
            @endif
        </div>

        @include('register')

    </div>

@endsection

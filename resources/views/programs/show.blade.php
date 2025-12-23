@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')
@section('register-link', 'https://portal.akadadance.com/auth?schoolId=363')

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
            <div style="max-width: 560px !important; width: 100% !important; margin: 0 auto !important;">
                {!! $program->programVideo !!}
            </div>
        </div>

            <div class="text-center">
                <h1 class="text-center my-5"><span class="pages-heading px-5 py-3">{{ $program->programTitle }}</span></h1>
                <div style="font-size: 18.4px !important;"><span style="font-size: 18.4px !important;">{!! $program->programDescription !!}</span></div>
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
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid my-1">
                            @include('/photos/admin')
                        </div>
                @endif
            @endforeach
        </div>

        <!-- END SHOW -->
        <!-- END OF TUITION BANNER -->



        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-3">
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

                <div class="accordion my-3" id="programsAccordion">
                    @foreach($headings as $heading)
                        @if($heading->headingName == 'programs' && $heading->headingSection == "$program->id")
                            <div class="accordion-item">
                                <h2 class="accordion-header" style="text-transform: uppercase;" id="headingPrograms{{ $heading->id }}">
                                    <button class="accordion-button text-uppercase fw-bold collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapsePrograms{{ $heading->id }}"
                                            aria-expanded="false"
                                            aria-controls="collapsePrograms{{ $heading->id }}">
                                        {{ $heading->title ?? 'Programs Table' }}
                                    </button>
                                </h2>
                                <div id="collapsePrograms{{ $heading->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="headingPrograms{{ $heading->id }}"
                                     data-bs-parent="#programsAccordion">
                                    <div class="accordion-body">
                                        @include('/headings/admin')
                                        <table class="table mb-0">
                                            @if($heading->head1)
                                                <thead>
                                                <tr class="table-head">
                                                    <th>{{ $heading->head1 }}</th>
                                                    <th>{{ $heading->head2 }}</th>
                                                    <th>{{ $heading->head3 }}</th>
                                                    <th>{{ $heading->head4 }}</th>
                                                </tr>
                                                </thead>
                                            @endif
                                            @livewire('tables-table', ['program' => $program])
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>




            </div>
{{--            @if($program->id == 3)--}}
                <div class="col-sm my-3">
                    <!-- TABLE CONTROL -->
                    @can('update', \App\Table::class)
                        <div id="programs-table" style="border:2px solid purple;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">second heading table section</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#headingModal"
                                    onClick="AddHeadingName('programs2'); AddHeadingSection('{{ $program->id }}');">
                                Add Heading
                            </button>
                            @include('/headings/form')
                        </div>
                        <div id="programs-table-b" style="border:2px solid purple;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">second table section</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                    onClick="AddTableName('programs2'); AddTableSection('{{ $program->id }}');">
                                Add New Row
                            </button>
                            @include('/tables/form')
                        </div>
                    @endcan

                    <div class="accordion my-3" id="programs2Accordion">
                        @foreach($headings as $heading)
                            @if($heading->headingName == 'programs2' && $heading->headingSection == "$program->id")
                                <div class="accordion-item">
                                    <h2 class="accordion-header" style="text-transform: uppercase;" id="headingPrograms2{{ $heading->id }}">
                                        <button class="accordion-button text-uppercase fw-bold collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapsePrograms2{{ $heading->id }}"
                                                aria-expanded="false"
                                                aria-controls="collapsePrograms2{{ $heading->id }}">
                                            {{ $heading->title ?? 'Programs 2 Table' }}
                                        </button>
                                    </h2>
                                    <div id="collapsePrograms2{{ $heading->id }}" class="accordion-collapse collapse"
                                         aria-labelledby="headingPrograms2{{ $heading->id }}"
                                         data-bs-parent="#programs2Accordion">
                                        <div class="accordion-body">
                                            @include('/headings/admin')
                                            <table class="table mb-0">
                                                @if($heading->head1)
                                                    <thead>
                                                    <tr class="table-head">
                                                        <th>{{ $heading->head1 }}</th>
                                                        <th>{{ $heading->head2 }}</th>
                                                        <th>{{ $heading->head3 }}</th>
                                                        <th>{{ $heading->head4 }}</th>
                                                    </tr>
                                                    </thead>
                                                @endif
                                                @livewire('sets-table', ['program' => $program])
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>



                </div>

            <div class="col-sm my-3">
                <!-- TABLE CONTROL -->
                @can('update', \App\Table::class)
                    <div id="programs-table" style="border:2px solid green;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">third heading table section</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#headingModal"
                                onClick="AddHeadingName('programs3'); AddHeadingSection('{{ $program->id }}');">
                            Add Heading
                        </button>
                        @include('/headings/form')
                    </div>
                    <div id="programs-table" style="border:2px solid green;" class="my-3 py-1 rounded shadow">
                        <span class="fw-bold mx-3">third programs table section</span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                {{--                                onClick="AddTableName('{{ substr(request()->route()->uri, 0, 8) }}'); AddTableSection('{{ $program->id }}');">--}}
                                onClick="AddTableName('programs3'); AddTableSection('{{ $program->id }}');">
                            Add New Row
                        </button>
                        @include('/tables/form')
                    </div>
            @endcan
            <!-- END TABLE CONTROL -->

                <div class="accordion my-3" id="programs3Accordion">
                    @foreach($headings as $heading)
                        @if($heading->headingName == 'programs3' && $heading->headingSection == "$program->id")
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingPrograms3{{ $heading->id }}">
                                    <button class="accordion-button text-uppercase fw-bold collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapsePrograms3{{ $heading->id }}"
                                            aria-expanded="false"
                                            aria-controls="collapsePrograms3{{ $heading->id }}">
                                        {{ $heading->title ?? 'Programs 3 Table' }}
                                    </button>
                                </h2>
                                <div id="collapsePrograms3{{ $heading->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="headingPrograms3{{ $heading->id }}"
                                     data-bs-parent="#programs3Accordion">
                                    <div class="accordion-body">
                                        @include('/headings/admin')
                                        <table class="table mb-0">
                                            @if($heading->head1)
                                                <thead>
                                                <tr class="table-head">
                                                    <th>{{ $heading->head1 }}</th>
                                                    <th>{{ $heading->head2 }}</th>
                                                    <th>{{ $heading->head3 }}</th>
                                                    <th>{{ $heading->head4 }}</th>
                                                </tr>
                                                </thead>
                                            @endif
                                            @livewire('trios-table', ['program' => $program])
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>



            </div>
{{--            @endif--}}
        </div>

        @include('register')

    </div>

@endsection

@extends('layouts.app')
@section('banner-image', 'dancers.png')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <x-heading title="About Us" />

            @can('update', \App\Text::class)
                <div id="about-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">about text section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                            onClick="AddTextName('about'); AddTextSection('A');">
                        Create New
                    </button>
                    @include('/texts/form')
                </div>
            @endcan
            @foreach($texts as $text)
                @if($text->name == 'about' && $text->section == 'A')
                    <div>
                        {!! $text->content !!}
                        @include('/texts/admin')
                    </div>
                @endif
            @endforeach

            <x-heading title="Meet Our Dream Team!" />

            <!-- IMAGE CONTROL -->
            @can('update', \App\Combo::class)
                <div id="instructors-photo-b" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">instructors combo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                            onClick="AddComboName('instructors'); AddComboSection('A');">
                        Add New
                    </button>
                    @include('/combos/form')
                </div>
            @endcan

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
                    @foreach($combos as $combo)
                        @if($combo->comboName == 'instructors' && $combo->comboSection == 'A')
                    <div class="col p-4">
                                <!-- card -->
                                    <div class="card mb-4">
                                        <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" class="img-fluid" style="filter: grayscale(100%);">
                                        <div class="card-body p-2">
                                            <!-- accordion -->
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item border-0">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <div style="font-size: 13.5px;" class="acc-btn" data-bs-toggle="collapse" data-bs-target="#{{ $combo->comboTag }}" aria-expanded="true" aria-controls="{{ $combo->comboTag }}">
                                                            {{ $combo->comboTitle }}
                                                        </div>
                                                    </h2>
                                                    <div id="{{ $combo->comboTag }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body p-2">
                                                            {!! $combo->comboContent !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end accordion -->
                                        </div>
                                        @include('/combos/admin')
                                    </div>
                                <!-- end card -->

                </div>
                        @endif
                    @endforeach
            </div>
            <!-- END IMAGE CONTROL -->

        </div>
    </div>

@endsection

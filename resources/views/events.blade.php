@extends('layouts.app')
@section('banner-image', 'calendar-of-events.jpg')
@section('register-link', 'https://s23jdkmq.pages.infusionsoft.net/')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center"><span class="pages-heading px-5 py-3">Events</span></h1>
{{--            <h2 class="text-center fw-bold mb-5">In-Studio & Virtual Parties available!</h2>--}}



            <!-- IMAGE CONTROL -->
            @can('update', \App\Combo::class)
                <div id="events-combo-c" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">events combo section c</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                            onClick="AddComboName('events'); AddComboSection('C');">
                        Add New
                    </button>
                    @include('/combos/form')
                </div>
            @endcan
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 m-0 p-0">
    @foreach($combos as $combo)
        @if($combo->comboName == 'events' && $combo->comboSection == 'C')
            <div class="event-odd-bg pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col pb-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" class="img-fluid">
                            </div>
                            <h4 class="text-center my-2">{{ $combo->comboTitle }}</h4>
                            <div class="text-center">
                                {!! $combo->comboContent !!}
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="main-button shadow" href="{{ $combo->comboUrl }}" target="_blank">{{ $combo->comboBtn }}</a>
                            </div>
{{--                            @include('register')--}}
                            @include('/combos/admin')
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <!-- END IMAGE CONTROL -->
    </div>

@endsection

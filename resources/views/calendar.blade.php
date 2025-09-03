@extends('layouts.app')
@section('banner-image', 'calendar-of-events.jpg')
@section('register-link', 'https://s23jdkmq.pages.infusionsoft.net/')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <x-heading title="Calendar" />
            {{--            <h2 class="text-center fw-bold mb-5">In-Studio & Virtual Parties available!</h2>--}}
            <div class="d-flex align-items-center justify-content-center my-4">
                <!-- Download Button -->
                <div>
                    <a href="{{ asset('/images/calendar-9-3-25.pdf') }}" download class="btn text-white mx-2 btn-red">
                        Download
                    </a>
                </div>
                <!-- Print Button -->
                <div>
                    <button onclick="window.print()" class="btn text-white mx-2 btn-secondary">Print</button>
                </div>
            </div>
            <div>
                <img src="/images/calendar-9-3-25.png" alt="" class="img-fluid">
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-sm">--}}
{{--                    <!-- TABLE CONTROL -->--}}
{{--                    @can('update', \App\Table::class)--}}
{{--                        <div id="programs-table" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">--}}
{{--                            <span class="fw-bold mx-3">events heading table section</span>--}}
{{--                            <!-- Button trigger modal -->--}}
{{--                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#headingModal"--}}
{{--                                    onClick="AddHeadingName('events'); AddHeadingSection('A');">--}}
{{--                                Add Heading--}}
{{--                            </button>--}}
{{--                            @include('/headings/form')--}}
{{--                        </div>--}}
{{--                        <div id="events-table-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">--}}
{{--                            <span class="fw-bold mx-3">events table section A</span>--}}
{{--                            <!-- Button trigger modal -->--}}
{{--                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"--}}
{{--                                    onClick="AddTableName('events'); AddTableSection('A');">--}}
{{--                                Add New Row--}}
{{--                            </button>--}}
{{--                            @include('/tables/form')--}}
{{--                        </div>--}}
{{--                    @endcan--}}

{{--                    <table class="table mb-0">--}}
{{--                        <thead>--}}
{{--                        @foreach($headings as $heading)--}}
{{--                            @if($heading->headingName == 'events' && $heading->headingSection == 'A')--}}
{{--                                <h2 class="table-title text-center">{{ $heading->title }}</h2>--}}
{{--                                @include('/headings/admin')--}}
{{--                                @if($heading->head1 == true)--}}
{{--                                    <tr class="table-head">--}}
{{--                                        <th>{{ $heading->head1 }}</th>--}}
{{--                                        <th>{{ $heading->head2 }}</th>--}}
{{--                                        <th>{{ $heading->head3 }}</th>--}}
{{--                                        <th>{{ $heading->head4 }}</th>--}}
{{--                                    </tr>--}}
{{--                                    @endif--}}
{{--                                @endif--}}
{{--                                @endforeach--}}
{{--                        </thead>--}}

{{--                    @livewire('calendar-table')--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>



@endsection

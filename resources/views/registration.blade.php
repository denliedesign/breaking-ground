@extends('layouts.app')
@section('banner-image', 'faq.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center"><span class="pages-heading px-5 py-3">Registration</span></h1>
            <div class="row my-5">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <a class="main-button shadow mx-3" target="_blank" href="https://app.akadadance.com/customer/login?schoolId=AK600070J">Returning Students Register Here</a>
                    </div>
                    @can('update', \App\Text::class)
                        <div id="register-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">register text section A</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                    onClick="AddTextName('register'); AddTextSection('A');">
                                Create New
                            </button>
                            @include('/texts/form')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->name == 'register' && $text->section == 'A')
                            <div class="text-center pt-3">
                                {!! $text->content !!}
                                @include('/texts/admin')
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <a class="main-button shadow mx-3" target="_blank" href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1">New Students Register Here</a>
                    </div>
                    @can('update', \App\Text::class)
                        <div id="register-text-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">register text section B</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                    onClick="AddTextName('register'); AddTextSection('B');">
                                Create New
                            </button>
                            @include('/texts/form')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->name == 'register' && $text->section == 'B')
                            <div class="text-center pt-3">
                                {!! $text->content !!}
                                @include('/texts/admin')
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <h2 class="text-center fw-bold mb-5 mt-0">Our Tuition is ALL INCLUSIVE!</h2>

            <!-- tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tuition-tab" data-bs-toggle="tab" data-bs-target="#tuition" type="button" role="tab" aria-controls="tuition" aria-selected="true">Tuition</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="inclusive-tab" data-bs-toggle="tab" data-bs-target="#inclusive" type="button" role="tab" aria-controls="inclusive" aria-selected="false">All Inclusive</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab" aria-controls="faqs" aria-selected="false">FAQ</button>
                </li>
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="fittings-tab" data-bs-toggle="tab" data-bs-target="#fittings" type="button" role="tab" aria-controls="fittings" aria-selected="false">Fittings</button>--}}
{{--                </li>--}}
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="inclusive" role="tabpanel" aria-labelledby="inclusive-tab">
                    <div class="col-sm">
                        @can('update', \App\Text::class)
                            <div id="faq-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                                <span class="fw-bold mx-3">faq text section A</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                        onClick="AddTextName('faq'); AddTextSection('A');">
                                    Create New
                                </button>
                                @include('/texts/form')
                            </div>
                        @endcan
                        @foreach($texts as $text)
                            @if($text->name == 'faq' && $text->section == 'A')
                                <div class="my-1">
                                    {!! $text->content !!}
                                    @include('/texts/admin')
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-------------------- TUITION TABLE SECTION -------------------------------------->
                <div class="tab-pane fade show active" id="tuition" role="tabpanel" aria-labelledby="tuition-tab">
                    <div class="col-sm">
                        <!-- TABLE CONTROL -->
                        @can('update', \App\Table::class)
                            <div id="tuition-heading-table-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                                <span class="fw-bold mx-3">faq heading table section A</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#headingModal"
                                        onClick="AddHeadingName('faq'); AddHeadingSection('A');">
                                    Add New Row
                                </button>
                                @include('/headings/form')
                            </div>
                            <div id="tuition-table-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                                <span class="fw-bold mx-3">tuition table section A</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                        onClick="AddTableName('faq'); AddTableSection('A');">
                                    Add New Row
                                </button>
                                @include('/tables/form')
                            </div>
                        @endcan

                        <table class="table mb-0">
                            <thead>
                            @foreach($headings as $heading)
                                @if($heading->headingName == 'faq' && $heading->headingSection == 'A')
                                    <h2 class="table-title text-center">{{ $heading->title }}</h2>
                                    @include('/headings/admin')
                                    @if($heading->head1 == true)
                                        <tr class="table-head">
                                            <th>{{ $heading->head1 }}</th>
                                            <th>{{ $heading->head2 }}</th>
                                            <th>{{ $heading->head3 }}</th>
                                            <th>{{ $heading->head4 }}</th>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                            </thead>

                        @livewire('tuition-table')
                        </table>
                        <!-- END TUITION TABLE CONTROL -->
                    </div>
                </div>
                <!-------------------- END TABLE SECTION -------------------------------------->
                <div class="tab-pane fade" id="faqs" role="tabpanel" aria-labelledby="faq-tab">
                    @can('update', \App\Text::class)
                        <div id="faq-text-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">faq text section B</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#txtModal"
                                    onClick="AddTextName('faq'); AddTextSection('B');">
                                Create New
                            </button>
                            @include('/texts/form-two')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->name == 'faq' && $text->section == 'B')
                            <div class="my-1">
                                {!! $text->content !!}
                                @include('/texts/admin')
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
            <!-- end tabs -->


{{--            <div class="d-flex justify-content-center my-4">--}}
{{--                <a class="main-button shadow mx-3" target="_blank" href="https://app.akadadance.com/customer/login?schoolId=AK600070J">Returning Students Register Here</a>--}}
{{--                <a class="main-button shadow mx-3" target="_blank" href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1">New Students Register Here</a>--}}
{{--            </div>--}}

        </div>
    </div>

@endsection

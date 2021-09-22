@extends('layouts.app')
@section('banner-image', 'faq.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center"><span class="pages-heading px-5 py-3">Register & FAQ</span></h1>
            <div class="d-flex justify-content-center my-5">
                <a class="main-button shadow mx-3" target="_blank" href="https://app.akadadance.com/customer/login?schoolId=AK600070J">Returning Students Register Here</a>
                <a class="main-button shadow mx-3" target="_blank" href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1">New Students Register Here</a>
            </div>
            <h2 class="text-center fw-bold mb-5 mt-0">Our Tuition is ALL INCLUSIVE!</h2>

            <!-- tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="inclusive-tab" data-bs-toggle="tab" data-bs-target="#inclusive" type="button" role="tab" aria-controls="inclusive" aria-selected="true">All Inclusive</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tuition-tab" data-bs-toggle="tab" data-bs-target="#tuition" type="button" role="tab" aria-controls="tuition" aria-selected="false">Tuition</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab" aria-controls="faqs" aria-selected="false">FAQ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#fittings" type="button" role="tab" aria-controls="fittings" aria-selected="false">Fittings</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="inclusive" role="tabpanel" aria-labelledby="inclusive-tab">
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
                <div class="tab-pane fade" id="tuition" role="tabpanel" aria-labelledby="tuition-tab">
                    <div class="col-sm">
                        <!-- TABLE CONTROL -->
                        @can('update', \App\Table::class)
                            <div id="faq-table-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                                <span class="fw-bold mx-3">faq table section A</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                        onClick="AddTableName('faq'); AddTableSection('A');">
                                    Add New Row
                                </button>
                                @include('/tables/form')
                            </div>
                        @endcan

                        <table class="table">
                            <tbody>
                            @foreach($tables as $table)
                                @if($table->tableName == 'faq' && $table->tableSection == 'A')
                                    <h2 class="table-title text-center">{{ $table->title }}</h2>
                                    @if($table->head1 == true)
                                        <tr class="table-head">
                                            <th>{{ $table->head1 }}</th>
                                            <th>{{ $table->head2 }}</th>
                                            <th>{{ $table->head3 }}</th>
                                            <th>{{ $table->head4 }}</th>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>{{ $table->col1 }}</td>
                                        <td>{{ $table->col2 }}</td>
                                        <td>{{ $table->col3 }}</td>
                                        <td>{{ $table->col4 }}</td>
                                        <td>@include('/tables/admin')</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        <!-- END TABLE CONTROL -->
                    </div>
                </div>
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

                <div class="tab-pane fade" id="fittings" role="tabpanel" aria-labelledby="fittings-tab">
                    <iframe src="https://letsmeet.io/breakinggrounddancecenter1/dancewear-fitting" style="border:none; min-height: 700px; width: 1px; min-width: 100%; *width: 100%;" name="booking" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" width="100%" height="100%" referrerpolicy="unsafe-url" allowfullscreen=""></iframe>
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

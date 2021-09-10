@extends('layouts.app')
@section('banner-image', 'calendar-of-events.jpg')
@section('register-link', 'https://irlysbom.pages.infusionsoft.net/')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Calendar & Events</span></h1>
{{--            <h2 class="text-center fw-bold mb-5">In-Studio & Virtual Parties available!</h2>--}}

            <div class="row">
                <div class="col-sm">
                    <!-- TABLE CONTROL -->
                    @can('update', \App\Table::class)
                        <div id="events-table-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">events table section A</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                    onClick="AddTableName('events'); AddTableSection('A');">
                                Add New Row
                            </button>
                            @include('/tables/form')
                        </div>
                    @endcan

                    <table class="table">
                        <tbody>
                        @foreach($tables as $table)
                            @if($table->tableName == 'events' && $table->tableSection == 'A')
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

                <div class="col-sm">
                    <!-- TABLE CONTROL -->
                    @can('update', \App\Table::class)
                        <div id="events-table-b" style="border:2px solid yellow;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">events table section B</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                                    onClick="AddTableName('events'); AddTableSection('B');">
                                Add New Row
                            </button>
                            @include('/tables/form')
                        </div>
                    @endcan

                    <table class="table">
                        <tbody>
                        @foreach($tables as $table)
                            @if($table->tableName == 'events' && $table->tableSection == 'B')
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

            <div class="row mt-4">
                <div class="col-sm">
                    <!-- IMAGE CONTROL -->
                    @can('update', \App\Photo::class)
                        <div id="events-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">events photo section A</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                                    onClick="AddPhotoName('events'); AddPhotoSection('A');">
                                Add New
                            </button>
                            @include('/photos/form')
                        </div>
                    @endcan
                    @foreach($photos as $photo)
                        @if($photo->photoName == 'events' && $photo->photoSection == 'A')
                            <div class="d-flex justify-content-center my-3">
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid" style="max-width: 600px; height: auto;">
                                @include('/photos/admin')
                            </div>
                        @endif
                    @endforeach
                <!-- END IMAGE CONTROL -->

                    @can('update', \App\Text::class)
                        <div id="events-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">events text section A</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                    onClick="AddTextName('events'); AddTextSection('A');">
                                Create New
                            </button>
                            @include('/texts/form')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->name == 'events' && $text->section == 'A')
                            <div class="my-1">
                                {!! $text->content !!}
                                @include('/texts/admin')
                            </div>
                        @endif
                    @endforeach

{{--                    @include('register')--}}
                </div>
            </div>





        </div>
    </div>

@endsection

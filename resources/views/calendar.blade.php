@extends('layouts.app')
@section('banner-image', 'calendar-of-events.jpg')
@section('register-link', 'https://s23jdkmq.pages.infusionsoft.net/')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Calendar</span></h1>
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
        </div>
    </div>



@endsection

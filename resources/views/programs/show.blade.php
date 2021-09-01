@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

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

        <!-- TABLE CONTROL -->
        @can('update', \App\Table::class)
            <div id="programs-table" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">programs table section</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tableModal"
                        onClick="AddTableName('programs'); AddTableSection('{{ $program->id }}');">
                    Add New Row
                </button>
                @include('/tables/form')
            </div>
        @endcan

        <table class="table">
            <tbody>
            @foreach($tables as $table)
                @if($table->tableName == 'programs' && $table->tableSection == "$program->id")
                    <h2 class="table-title">{{ $table->title }}</h2>
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

@endsection

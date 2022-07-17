@extends('layouts.app')
@section('banner-image', 'classes-bgdc.png')

@section('content')

    @include('banner')

    <div class="container py-5">
        @can('update', \App\Program::class)
            <div class="text-center m-5">
                <span class="border border-1 border-primary rounded p-3">
                    <a href="/programs/create">Create New</a>
                </span>
            </div>
        @endcan

        <!-- first section -->

        <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Classes</span></h1>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
            @foreach($programs as $program)
                @if($program->category == 'program')

                        <div class="card-group col-sm text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/programs/{{ $program->slug }}"><img src="{{ asset('/storage/' . $program->programImage) }}" alt="" class="img-fluid"></a>
                                    <h3>{{ $program->programTitle }}</h3>
                                    <p>{{ $program->programAge }}</p>
                                    @include('/programs/admin')
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-red btn-family shadow mx-3" href="/programs/{{ $program->slug }}">Click Here For Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif
            @endforeach
        </div>

        <!-- next section -->

        <h1 class="text-center my-5"><span class="pages-heading px-5 py-3">Intensive</span></h1>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
            @foreach($programs as $program)
                @if($program->category == 'intensive')
                    <div class="card-group col-sm text-center">
                        <div class="card">
                            <div class="card-body">
                                <a href="/programs/{{ $program->slug }}"><img src="{{ asset('/storage/' . $program->programImage) }}" alt="" class="img-fluid"></a>
                                <h3>{{ $program->programTitle }}</h3>
                                <p>{{ $program->programAge }}</p>
                                @include('/programs/admin')
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center">
                                    <a class="main-button shadow mx-3" href="/programs/{{ $program->slug }}">Click Here For Schedule</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

{{--    <!-- next section -->--}}

{{--    <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Performing Ensemble</span></h1>--}}
{{--    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">--}}
{{--        @foreach($programs as $program)--}}
{{--            @if($program->category == 'ensemble')--}}
{{--                <div class="col-sm text-center">--}}
{{--                    <div>--}}
{{--                        <a href="/programs/{{ $program->id }}"><img src="{{ asset('/storage/' . $program->programImage) }}" alt="" class="img-fluid"></a>--}}
{{--                        <h3>{{ $program->programTitle }}</h3>--}}
{{--                        <p>{{ $program->programAge }}</p>--}}
{{--                        @include('/programs/admin')--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <!-- next section -->--}}

{{--    <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Competitive Company</span></h1>--}}
{{--    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">--}}
{{--        @foreach($programs as $program)--}}
{{--            @if($program->category == 'company')--}}
{{--                <div class="col-sm text-center">--}}
{{--                    <div>--}}
{{--                        <a href="/programs/{{ $program->id }}"><img src="{{ asset('/storage/' . $program->programImage) }}" alt="" class="img-fluid"></a>--}}
{{--                        <h3>{{ $program->programTitle }}</h3>--}}
{{--                        <p>{{ $program->programAge }}</p>--}}
{{--                        @include('/programs/admin')--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </div>--}}

    @include('attire')

@endsection

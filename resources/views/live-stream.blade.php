@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">
            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Live Stream</span></h1>

            @can('update', \App\Text::class)
                <div id="livestream-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">livestream text section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                            onClick="AddTextName('livestream'); AddTextSection('A');">
                        Create New
                    </button>
                    @include('/texts/form')
                </div>
            @endcan
            @foreach($texts as $text)
                @if($text->name == 'livestream' && $text->section == 'A')
                    <div class="my-5">
                        {!! $text->content !!}
                        @include('/texts/admin')
                    </div>
                @endif
            @endforeach

        </div>
    </div>

@endsection

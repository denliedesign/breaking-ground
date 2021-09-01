@extends('layouts.app')
@section('banner-image', 'parties.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            @can('update', \App\Text::class)

                <a href="/texts/create">New Text</a>
                <br><br>

            @foreach($texts as $text)

                <h3>{{ $text->name }} <span>{{ $text->section }}</span></h3>
                    <p>
                        {{ $text->content }}
                    </p>
                    <form action="/texts/{{ $text->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger ml-4" type="submit">Delete</button>
                    </form>

            @endforeach

            @endcan

        </div>
    </div>

@endsection

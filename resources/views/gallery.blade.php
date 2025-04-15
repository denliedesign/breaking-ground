@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="py-5">

            <!-- IMAGE CONTROL -->
            @can('update', \App\Photo::class)
                <div id="gallery-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">gallery photo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('gallery'); AddPhotoSection('A');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan

            <section class="masonry">
                <div class="gallery">
                    @foreach($photos as $photo)
                        @if($photo->photoName == 'gallery' && $photo->photoSection == 'A')
                            <div>
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="">
                                @include('/photos/admin')
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>

        <!-- END IMAGE CONTROL -->

        </div>
    </div>

@endsection

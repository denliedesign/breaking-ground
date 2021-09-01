@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')
@section('register-link', '/faq')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Our Studio</span></h1>
            <p class="text-center mb-5" style="color: #666;">We invite and encourage you to personally check out our facility.
                <br>We have taken the time and effort to have a studio that offers the best environment for success and fun!</p>

            <div class="d-flex justify-content-center my-5">
                <div>
                    <h3 class="fw-bold">BGDC Studio Tour</h3>
                    <iframe width="700" height="400" src="https://www.youtube.com/embed/H3OVo_BU56U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        <!-- IMAGE CONTROL -->
            @can('update', \App\Photo::class)
                <div id="facility-photo-b" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">facility photo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('facility'); AddPhotoSection('A');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 mt-3">
                @foreach($photos as $photo)
                    @if($photo->photoName == 'facility' && $photo->photoSection == 'A')
                        <div class="col mb-3">
                            <img src="{{ asset('/storage/' . $photo->image) }}" alt="" class="img-fluid">
                            @include('/photos/admin')
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- END IMAGE CONTROL -->

            @include('register')

        </div>
    </div>

@endsection

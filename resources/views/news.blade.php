@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <h1 class="text-center mb-5"><span class="pages-heading px-5 py-3">Covid-19 Updates</span></h1>
            <div class="row">
                <div class="col-sm">
                    <img src="/images/health-1.png" alt="health procedures" class="img-fluid">
                </div>
                <div class="col-sm">
                    <img src="/images/health-2.png" alt="studio map" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')
@section('banner-image', 'bg-bg.jpg')

@section('content')

{{--    @include('banner')--}}

    <div class="container">
        <div class="py-5">
            <x-heading title="CONNECT TO LIVE STREAM" />

            {{ $code = "" }}

            @if(isset($_POST['code']))
                <div style="display: none;">
                    {{ $code = $_POST['code'] }}
                </div>
            @endif

            @if($code == 'bgparent24')
                @include('connected')
            @else
                <div style="height: 100%;" class="d-flex align-items-center justify-content-center text-center">
                    <form method="post" action="studio-livestream" style="border: 1px solid silver; border-radius: 10px;" class="p-5">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="code">Password</label>
                                <input type="password" class="form-control my-2" id="code" name="code" aria-describedby="code">
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
    @endif

        </div>
    </div>

@endsection

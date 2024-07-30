@extends('layouts.app')
@section('banner-image', 'dancers.png')

@section('content')

    @include('banner')

    <div class="container">
        <div class="py-5">

            <x-heading title="Dress Code" />

            <!-- IMAGE CONTROL -->
            @can('update', \App\Combo::class)
                <div id="dress-photo-b" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">dress combo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                            onClick="AddComboName('dress'); AddComboSection('A');">
                        Add New
                    </button>
                    @include('/combos/form')
                </div>
            @endcan

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
                @foreach($combos as $combo)
                    @if($combo->comboName == 'dress' && $combo->comboSection == 'A')
                        <div class="col p-4">
                            <!-- card -->
                            <div class="card mb-4">
                                <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" class="img-fluid">
                                <div class="card-body p-2">
                                    <!-- accordion -->
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item border-0">
                                            <h2 class="accordion-header" id="headingOne">
                                                <div class="acc-btn" data-bs-toggle="collapse" data-bs-target="#{{ $combo->comboTag }}" aria-expanded="true" aria-controls="{{ $combo->comboTag }}">
                                                    {{ $combo->comboTitle }}
                                                </div>
                                            </h2>
                                            <div id="{{ $combo->comboTag }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body p-2">
                                                    {!! $combo->comboContent !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion -->
                                </div>
                                @include('/combos/admin')
                            </div>
                            <!-- end card -->

                        </div>
                    @endif
                @endforeach
            </div>
            <!-- END IMAGE CONTROL -->

            <div>
                <iframe src="https://link.enrollio.ai/widget/booking/WVAwye6EBofhB3YkKQxK" style="width: 100%;border:none;overflow: hidden;" scrolling="no" id="WVAwye6EBofhB3YkKQxK_1722354232737"></iframe><br><script src="https://link.enrollio.ai/js/form_embed.js" type="text/javascript"></script>
{{--                <iframe src="https://letsmeet.io/breakinggrounddancecenter1/fittings" style="border:none; min-height: 700px; width: 1px; min-width: 100%; *width: 100%;" name="booking" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" width="100%" height="100%" referrerpolicy="unsafe-url" allowfullscreen></iframe>--}}
            </div>
        </div>
    </div>

@endsection

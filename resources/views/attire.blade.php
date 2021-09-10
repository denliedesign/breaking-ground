<div class="container">
    <h1 class="text-center my-5"><span class="pages-heading px-5 py-3">Attire</span></h1>

    <!-- IMAGE CONTROL -->
    @can('update', \App\Combo::class)
        <div id="attire-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
            <span class="fw-bold mx-3">attire combo section a</span>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                    onClick="AddComboName('attire'); AddComboSection('A');">
                Add New
            </button>
            @include('/combos/form')
        </div>
    @endcan

    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach($combos as $combo)
            @if($combo->comboName == 'attire' && $combo->comboSection == 'A')
                <div class="col">
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

    <h1 class="text-center mt-5 mb-3"><span class="pages-heading px-5 py-3">Dancewear/Shoe Fittings</span></h1>

    <iframe src="https://letsmeet.io/breakinggrounddancecenter1/dancewear-fitting" style="border:none; min-height: 700px; width: 1px; min-width: 100%; *width: 100%;" name="booking" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" width="100%" height="100%" referrerpolicy="unsafe-url" allowfullscreen=""></iframe>

</div>

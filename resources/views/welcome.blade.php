@extends('layouts.app')

@section('content')

    <!-- Modal -->
{{--    <div id="summerModal" class="modal" tabindex="-1">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title">Breaking Ground Dance Center</h5>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <video style="height: auto; width: 100%;" src="images/if-you-let-me-dance.mp4" controls="" poster="/images/if-you-let-me-dance-poster.png" type="video/mp4">--}}
{{--                    </video>--}}
{{--                    <div class="d-flex justify-content-center my-3">--}}
{{--                        <a href="/programs" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Find Your Class</div></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="d-none d-md-flex text-uppercase fw-bold my-4" style="width: 100%; font-size: 2.75em; font-family: 'Montserrat', serif;">--}}
{{--        <div style="margin-left: 10%;">--}}
{{--            <ion-icon name="chevron-forward-outline"></ion-icon><ion-icon name="chevron-forward-outline"></ion-icon><ion-icon name="chevron-forward-outline"></ion-icon>--}}
{{--            Our Dancers Are&nbsp;</div>--}}
{{--        <div id="statement" style="font-size: 1em; color: #dd3333; text-decoration: underline;"></div>--}}
{{--    </div>--}}

{{--    <div class="d-block d-md-none text-uppercase text-center fw-bold mt-4" style="width: 100%; height: 50vh; font-size: 2.75em; font-family: 'Montserrat', serif;">--}}
{{--        <div>Our Dancers Are&nbsp;</div>--}}
{{--        <div id="statement" style="font-size: 1em; color: #dd3333; text-decoration: underline;"></div>--}}
{{--    </div>--}}

    <div class="container d-flex d-inline">
        @can('update', \App\Combo::class)
            <div id="main-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">First Slider Only</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('main'); AddComboSection('A');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
            <div id="main-combo-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">All Other Sliders</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('main'); AddComboSection('B');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
        @endcan
    </div>

    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($combos as $combo)
                @if($combo->comboName == 'main' && $combo->comboSection == 'A')
                    <div class="carousel-item active" style="position: relative;">
                        <a href="{{ $combo->comboTitle }}"><img src="{{ asset('/storage/' . $combo->comboImage) }}" class="d-block w-100" alt="..."></a>
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">@include('/combos/admin')</div>
                    </div>
                @endif
                @if($combo->comboName == 'main' && $combo->comboSection == 'B')
                    <div class="carousel-item">
                        <a href="{{ $combo->comboTitle }}"><img src="{{ asset('/storage/' . $combo->comboImage) }}" class="d-block w-100" alt="..."></a>
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">@include('/combos/admin')</div>
                    </div>
                @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="mx-3">
        <!-- WELCOME COMBO CONTROL -->
        @can('update', \App\Combo::class)
            <div id="welcome-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">welcome combo section a</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('welcome'); AddComboSection('A');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
        @endcan


                <div class="mx-5">
                    <div class="my-5">
                        @foreach($combos as $combo)
                            @if($combo->comboName == 'welcome' && $combo->comboSection == 'A')
                        @include('/combos/admin')
                        <div class="d-flex justify-content-center">
                            <div>
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" style="" class="img-fluid">
{{--                                    <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" style="max-height: 300px; width: auto;">--}}
                                </div>
                                <div style="font-size: 1em;">
                                    <h2 class="text-uppercase" style="color: #dd3333;">{{ $combo->comboTitle }}</h2>
                                    {!! $combo->comboContent !!}
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
{{--                        <div class="col-sm d-flex justify-content-center">--}}
{{--                            <div>--}}
{{--                                <div class="d-flex justify-content-center">--}}
{{--                                    <img src="/images/logo-bow-2022.png" alt="bow award" class="img-fluid" style="max-height: 300px;">--}}
{{--                                </div>--}}
{{--                                <div class="text-center" style="font-size: 1.25em;">--}}
{{--                                    Best of Westchester 2022 Winner for Best Dance Studio and Best After-school Program--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
    <!-- END WELCOME COMBO CONTROL -->
    </div>

    <div>
        <img src="/images/culture.jpg" alt="" style="width: 100%; height: auto;">
    </div>

    <div class="mx-3">
        <!-- WELCOME COMBO CONTROL -->
        @can('update', \App\Combo::class)
            <div id="welcome-combo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                <span class="fw-bold mx-3">welcome combo section b</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comboModal"
                        onClick="AddComboName('welcome'); AddComboSection('B');">
                    Add New
                </button>
                @include('/combos/form')
            </div>
        @endcan


        <div class="mx-5">
            <div class="my-5">
                @foreach($combos as $combo)
                    @if($combo->comboName == 'welcome' && $combo->comboSection == 'B')
                        @include('/combos/admin')
                        <div class="d-flex justify-content-center">
                            <div>
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" style="" class="img-fluid">
                                </div>
                                <div style="font-size: 1em;">
                                    <h2 class="text-uppercase" style="color: #dd3333;">{{ $combo->comboTitle }}</h2>
                                    {!! $combo->comboContent !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{--                        <div class="col-sm d-flex justify-content-center">--}}
                {{--                            <div>--}}
                {{--                                <div class="d-flex justify-content-center">--}}
                {{--                                    <img src="/images/logo-bow-2022.png" alt="bow award" class="img-fluid" style="max-height: 300px;">--}}
                {{--                                </div>--}}
                {{--                                <div class="text-center" style="font-size: 1.25em;">--}}
                {{--                                    Best of Westchester 2022 Winner for Best Dance Studio and Best After-school Program--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
            </div>
        </div>
        <!-- END WELCOME COMBO B CONTROL -->
    </div>

    <div class="container mt-5">
        <video style="height: auto; width: 100%;" src="images/if-you-let-me-dance.mp4" controls="" poster="/images/if-you-let-me-dance-poster.png" type="video/mp4" class="shadow rounded">
        </video>
        <div class="d-flex justify-content-center my-3">
            <a href="/programs" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Find Your Class</div></a>
        </div>
    </div>

{{--    <div style="background: #dd3333;" class="text-white py-4">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm d-flex justify-content-center align-items-center">--}}
{{--                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/hxNx0jQAA4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--                <div class="col-sm">--}}
{{--                    <h2 class="text-center">BGDC IS A SAFER STUDIO™</h2>--}}
{{--                    <div class="d-flex justify-content-center my-2">--}}
{{--                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="max-height: 200px; width: auto;">--}}
{{--                    </div>--}}
{{--                    <p class="text-center">--}}
{{--                        During the Coronavirus (COVID-19) pandemic, MTJGD™ recommends all members use a phased approach to reopening physical services, based on the latest government guidance, as well as regional and local orders. MTJGD™ recommends all members develop and clearly communicate a “Safer Studio Plan” to address any operational changes, precautionary measures, and policy adjustments being made to facilitate the safest possible return to in-person services.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div>
        <div class="container">
            <!-- AWARDS PHOTO CONTROL -->
            @can('update', \App\Photo::class)
                <div id="welcome-photo-a" style="border:2px solid red;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">welcome photo section A</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('welcome'); AddPhotoSection('A');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            <div class="row mt-3">
                @foreach($photos as $photo)
                    @if($photo->photoName == 'welcome' && $photo->photoSection == 'A')
                        <div class="col d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="" style="max-height: 125px; width: auto;">
                                @include('/photos/admin')
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- END AWARDS PHOTO CONTROL -->
            <!-- PARTNER PHOTO CONTROL -->
            @can('update', \App\Photo::class)
                <div id="welcome-photo-b" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                    <span class="fw-bold mx-3">welcome photo section B</span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal"
                            onClick="AddPhotoName('welcome'); AddPhotoSection('B');">
                        Add New
                    </button>
                    @include('/photos/form')
                </div>
            @endcan
            <div class="row my-3">
                @foreach($photos as $photo)
                    @if($photo->photoName == 'welcome' && $photo->photoSection == 'B')
                        <div class="col d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('/storage/' . $photo->image) }}" alt="" style="max-height: 200px; width: auto;">
                                @include('/photos/admin')
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- END PARTNER PHOTO CONTROL -->
        </div>
    </div>

    <div>

        <div id="testimonial-bg-wrap" style="font-family: 'Montserrat', serif;">
            <div id="testimonial-bg">

                <div id="carousel-testimonial-wrap" class="">
                    <div id="carouselTestimonial" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-2 p-md-3">
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-none d-md-block">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-block d-md-none" style="height: 60px; width: auto;">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="p-3">
                                            <p class="txt-red mb-2" role="img" aria-label="5 out of 5 stars"><span aria-hidden="true">&#9733; &#9733; &#9733; &#9733; &#9733;</span></p>
                                            <p class="d-none d-md-block mb-0" style="font-size: 1em;">
                                                We&#39;ve been taking dance at Breaking Ground for the last two years and it has been a fantastic experience. Very organized, great communication and the building is beautiful.
                                            </p>
                                            <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                                We&#39;ve been taking dance at Breaking Ground for the last two years and it has been a fantastic experience. Very organized, great communication and the building is beautiful.
                                            </p>
                                            <div class="d-flex align-items-center">
                                                &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.1em;">-Emily Hart</span>
                                                <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Emily Hart</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-2 p-md-3">
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-none d-md-block">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-block d-md-none" style="height: 60px; width: auto;">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="p-3">
                                            <p class="txt-red mb-2" role="img" aria-label="5 out of 5 stars"><span aria-hidden="true">&#9733; &#9733; &#9733; &#9733; &#9733;</span></p>
                                            <p class="d-none d-md-block mb-0" style="font-size: 1em;">
                                                My girls have been at Breaking Ground since they were 2 years old. It’s been such an incredible experience to watch them grow, have fun and build confidence. The instructors have been incredible!
                                            </p>
                                            <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                                My girls have been at Breaking Ground since they were 2 years old. It’s been such an incredible experience to watch them grow, have fun and build confidence. The instructors have been incredible!
                                            </p>
                                            <div class="d-flex align-items-center">
                                                &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.1em;">-Francesca Fernandez</span>
                                                <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Francesca Fernandez</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-2 p-md-3">
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-none d-md-block">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-block d-md-none" style="height: 60px; width: auto;">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="p-3">
                                            <p class="txt-red mb-2" role="img" aria-label="5 out of 5 stars"><span aria-hidden="true">&#9733; &#9733; &#9733; &#9733; &#9733;</span></p>
                                            <p class="d-none d-md-block mb-0" style="font-size: 1em;">
                                                Amazing studio. From the knowledge and instructional ability of the teachers to the impressive organization and clear communication home, this studio is above and beyond. The professionalism and quality of performance is elite. I would recommend this studio to anyone who wants their child to have a memorable performing arts experience in the realm of dance!
                                            </p>
                                            <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                                Amazing studio. From the knowledge and instructional ability of the teachers to the impressive organization and clear communication home, this studio is above and beyond. The professionalism and quality of performance is elite. I would recommend this studio to anyone who wants their child to have a memorable performing arts experience in the realm of dance!
                                            </p>
                                            <div class="d-flex align-items-center">
                                                &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.1em;">-Erin Sica</span>
                                                <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Erin Sica</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-2 p-md-3">
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-none d-md-block">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-block d-md-none" style="height: 60px; width: auto;">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="p-3">
                                            <p class="txt-red mb-2" role="img" aria-label="5 out of 5 stars"><span aria-hidden="true">&#9733; &#9733; &#9733; &#9733; &#9733;</span></p>
                                            <p class="d-none d-md-block mb-0" style="font-size: 1em;">
                                                BGDC is a 2nd home for both of my girls! The teachers are amazing, the facility is clean, the recital and attention to details is unmatched! We would highly recommend this studio.
                                            </p>
                                            <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                                BGDC is a 2nd home for both of my girls! The teachers are amazing, the facility is clean, the recital and attention to details is unmatched! We would highly recommend this studio.
                                            </p>
                                            <div class="d-flex align-items-center">
                                                &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.1em;">-Kristyna Russo</span>
                                                <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Kristyna Russo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-2 p-md-3">
                                    <div class="col-sm-3">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-none d-md-block">
                                            <img src="/images/guarantee.png" alt="parent satisfaction guarantee" class="img-fluid d-block d-md-none" style="height: 60px; width: auto;">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="p-3">
                                            <p class="txt-red mb-2" role="img" aria-label="5 out of 5 stars"><span aria-hidden="true">&#9733; &#9733; &#9733; &#9733; &#9733;</span></p>
                                            <p class="d-none d-md-block mb-0" style="font-size: 1em;">
                                                I can’t say enough great things about Breaking Ground Dance Center. We started here when my oldest was just 2.5 years old and now have both my daughters in various dance classes. The teachers are so talented and sweet- my girls look forward to coming every week. The studio is super organized and professional. As a dancer for 16 years growing up, Breaking Ground has exceeded my expectations! We look forward to many years ahead!
                                            </p>
                                            <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                                I can’t say enough great things about Breaking Ground Dance Center. We started here when my oldest was just 2.5 years old and now have both my daughters in various dance classes. The teachers are so talented and sweet- my girls look forward to coming every week. The studio is super organized and professional. As a dancer for 16 years growing up, Breaking Ground has exceeded my expectations! We look forward to many years ahead!
                                            </p>
                                            <div class="d-flex align-items-center">
                                                &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.1em;">-Lauren Cipriano</span>
                                                <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Lauren Cipriano</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

{{--    <div class="my-5">--}}
{{--        <h1 class="text-center"><span class="pages-heading px-5 py-3">Studio</span></h1>--}}
{{--        <div class="d-flex justify-content-center mt-5">--}}
{{--            <iframe width="1120" height="630" src="https://www.youtube.com/embed/H3OVo_BU56U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--        </div>--}}
{{--    </div>--}}


@endsection


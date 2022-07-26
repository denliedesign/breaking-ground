@extends('layouts.app')

@section('content')

    <!-- Modal -->
    <div id="summerModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Breaking Ground Dance Center</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
{{--                    <p>Modal body text goes here.</p>--}}
{{--                    <div class="col-sm d-flex justify-content-center align-items-center">--}}
{{--                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/hxNx0jQAA4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
                    <video style="height: auto; width: 100%;" src="images/if-you-let-me-dance.mp4" controls="" poster="/images/if-you-let-me-dance-poster.png" type="video/mp4">
                    </video>
                    <div class="d-flex justify-content-center my-3">
                        <a href="/programs" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">Find Your Class</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-none d-md-flex text-uppercase fw-bold my-4" style="width: 100%; font-size: 2.75em; font-family: 'Montserrat', serif;">
        <div style="margin-left: 10%;">
            <ion-icon name="chevron-forward-outline"></ion-icon><ion-icon name="chevron-forward-outline"></ion-icon><ion-icon name="chevron-forward-outline"></ion-icon>
            Our Dancers Are&nbsp;</div>
        <div id="statement" style="font-size: 1em; color: #dd3333; text-decoration: underline;"></div>
    </div>

    <div class="d-block d-md-none text-uppercase text-center fw-bold mt-4" style="width: 100%; height: 50vh; font-size: 2.75em; font-family: 'Montserrat', serif;">
        <div>Our Dancers Are&nbsp;</div>
        <div id="statement" style="font-size: 1em; color: #dd3333; text-decoration: underline;"></div>
    </div>

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

        @foreach($combos as $combo)
            @if($combo->comboName == 'welcome' && $combo->comboSection == 'A')
                <div class="container">
                    <div class="row my-5">
                        @include('/combos/admin')
                        <div class="col-sm-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('/storage/' . $combo->comboImage) }}" alt="" style="max-height: 300px; width: auto;">
                        </div>
                        <div class="col-sm-8 d-flex align-items-center">
                            <div style="font-size: 1em;">
                                <h2 class="text-uppercase" style="color: #dd3333;">{{ $combo->comboTitle }}</h2>
                                {!! $combo->comboContent !!}
                            </div>
                        </div>
                    </div>
                </div>
        @endif
    @endforeach
    <!-- END WELCOME COMBO CONTROL -->
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

    <div style="background: #f4f4f4;">
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

                <div id="carousel-testimonial-wrap" class="rounded shadow">
                    <div id="carouselTestimonial" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselTestimonial" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        Thank you for all that you have done this year to make Ellie’s first year incredible.  Having her former studio close during the pandemic, although unfortunate, led her to BGDC and I think it was a blessing.   Besides the dancing, which is incredible, the emphasis on team building and sisterhood is so important.  Kids need this more than ever.   BGDC is truly amazing, like no other studio.  Ellie has had the chance to grow and thrive.
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        Thank you for all that you have done this year to make Ellie’s first year incredible.  Having her former studio close during the pandemic, although unfortunate, led her to BGDC and I think it was a blessing.   Besides the dancing, which is incredible, the emphasis on team building and sisterhood is so important.  Kids need this more than ever.   BGDC is truly amazing, like no other studio.  Ellie has had the chance to grow and thrive.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Erin Baker</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Erin Baker</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        The 2020 recital was truly perfect! The shows were beautifully run, well organized, fun, and COVID safe.  We loved the special touches like the gorgeous balloon displays, photo backdrops, and signs recognizing 5/10 year students and graduating seniors.  We noticed every detail and loved it all!  Thanks again for making BGDC a great dance home for our girls.
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        The 2020 recital was truly perfect! The shows were beautifully run, well organized, fun, and COVID safe.  We loved the special touches like the gorgeous balloon displays, photo backdrops, and signs recognizing 5/10 year students and graduating seniors.  We noticed every detail and loved it all!  Thanks again for making BGDC a great dance home for our girls.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Rebecca Shaw</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Rebecca Shaw</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        Our daughter Sophia had an amazing experience at her recital! This year has taught her to come out of her shell a bit more and really boost her confidence with the help of Breaking Ground! Hats off to Marissa and the entire staff for doing such an amazing job of keeping our kids safe and smiling the whole year!
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        Our daughter Sophia had an amazing experience at her recital! This year has taught her to come out of her shell a bit more and really boost her confidence with the help of Breaking Ground! Hats off to Marissa and the entire staff for doing such an amazing job of keeping our kids safe and smiling the whole year!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Valerie Racanelli</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Valerie Racanelli</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1em;">
                                        My daughter Ella, a graduating senior and Senior Company member, ended her competition season on a perfect note with her best friend Lauren at her side.  The girls took one last picture together on stage and looking back, it really depicts the strong friendships that my daughter has gained through BG.  It was great that Ella and Lauren ended their time at BG together.  They still talk about how their friendship began with they were in Petite Ensemble.  Thank you to Marissa and her team for all they have done for Ella.  When she was 9, I remember asking her what she loves the most about dance and she said it made her feel free and that she can be herself.  I will always remember that!
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.6em;">
                                        My daughter Ella, a graduating senior and Senior Company member, ended her competition season on a perfect note with her best friend Lauren at her side.  The girls took one last picture together on stage and looking back, it really depicts the strong friendships that my daughter has gained through BG.  It was great that Ella and Lauren ended their time at BG together.  They still talk about how their friendship began with they were in Petite Ensemble.  Thank you to Marissa and her team for all they have done for Ella.  When she was 9, I remember asking her what she loves the most about dance and she said it made her feel free and that she can be herself.  I will always remember that!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.1em;">-Teresa Agabob</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.6em;">-Teresa Agabob</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        Breaking Ground Dance Center has boys in different classes and age groups. What I like about this school is that the schedule and expectations are shared with everyone early and the bill includes photography and costumes.  The kids quickly welcome new comers. No drama or unnecessary competitiveness.  We tried a class and stayed. Additionally, they will have an expanded, renovated, space for all to enjoy including a homework/collaborative area <ion-icon name="heart"></ion-icon>
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        Breaking Ground Dance Center has boys in different classes and age groups. What I like about this school is that the schedule and expectations are shared with everyone early and the bill includes photography and costumes.  The kids quickly welcome new comers. No drama or unnecessary competitiveness.  We tried a class and stayed. Additionally, they will have an expanded, renovated, space for all to enjoy including a homework/collaborative area <ion-icon name="heart"></ion-icon>
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Yvonne Last</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Yvonne Last</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        My daughter has not only learned dance skills, she has made wonderful friends, gained such confidence & self- esteem & learned life skills. We truly love this school & all its teachers. They become like family.
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        My daughter has not only learned dance skills, she has made wonderful friends, gained such confidence & self- esteem & learned life skills. We truly love this school & all its teachers. They become like family.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Norma Klein</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Norma Klein</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        BG is my daughter’s favorite place on earth. She loves taking challenging classes and learning from the outstanding teachers. She couldn’t be happier there and as a parent that’s what makes me happy. This is our 7th year!
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        BG is my daughter’s favorite place on earth. She loves taking challenging classes and learning from the outstanding teachers. She couldn’t be happier there and as a parent that’s what makes me happy. This is our 7th year!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Alissa Dorfman</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Alissa Dorfman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="px-4 py-3">
                                    <p class="d-none d-md-block mb-0" style="font-size: 1.2em;">
                                        BG is filled with nurturing, talented staff. My daughters love being there, learning and being with friends. It is filled with positivity and they are bringing that home with them. Thank you!
                                    </p>
                                    <p class="d-block d-md-none mb-0" style="font-size: 0.7em;">
                                        BG is filled with nurturing, talented staff. My daughters love being there, learning and being with friends. It is filled with positivity and they are bringing that home with them. Thank you!
                                    </p>
                                    <div class="d-flex align-items-center">
                                        {{--                                   <ion-icon name="person-circle-outline" style="font-size: 2em; color: #d33;"></ion-icon>--}}
                                        &nbsp; <span class="lead d-none d-md-block" style="font-size: 1.2em;">-Becky Hanifin</span>
                                        <span class="lead d-block d-md-none" style="font-size: 0.7em;">-Becky Hanifin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection


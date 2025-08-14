<div style="background: #333; color: white;">
    <div class="container">
        <div class="pt-4 pb-1" id="footer">
            <div class="row">
                <div class="col-sm-3">
                    <div class="row row-cols-3 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 mb-2">
                        <div class="d-flex justify-content-center"><a href="/"><img src="/images/bgdc-logo-white.png" alt="logo" class="pb-2" style="max-height: 120px; width: auto;"></a></div>
                        <div class="d-flex justify-content-center"><img src="/images/logo-mtjgd.png" alt="logo" class="pb-2" style="max-height: 120px; width: auto;"></div>
                        <div class="d-flex justify-content-center"><img src="/images/logo-bow-24.png" alt="logo" class="pb-2" style="max-height: 120px; width: auto; filter: invert(1);"></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5 style="text-decoration: underline;">Contact Us</h5>
                    <p>
                    <ion-icon name="mail"></ion-icon>
                    <a class="text-white" style="text-decoration: none;" href="mailto:breakinggrounddance@hotmail.com">breakinggrounddance@hotmail.com</a>
                    <br><br>
                    <ion-icon name="call"></ion-icon>
                    914-747-3150
                    <br><br>
                    <ion-icon name="pin"></ion-icon>
                    101 Castleton Street,
                    <br>Pleasantville, NY 10570
                    @can('update', \App\Text::class)
                        <div id="honor-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
                            <span class="fw-bold mx-3">hours text section B</span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                                    onClick="AddTextName('hours'); AddTextSection('B');">
                                Create New
                            </button>
                            @include('/texts/form')
                        </div>
                    @endcan
                    @foreach($texts as $text)
                        @if($text->name == 'hours' && $text->section == 'B')
                            <br><br>
                            <div id="without-p-tags"><ion-icon name="arrow-forward-circle-outline"></ion-icon> {!! $text->content !!}</div>
                            @include('/texts/admin')
                            @endif
                            @endforeach
                    </p>
                        <div>
                            <h5 style="text-decoration: underline;">NAV</h5>
                            <ul id="footer-nav">
                                {{--                        <li>--}}
                                {{--                            <a href="/studio-livestream">Live Stream</a>--}}
                                {{--                        </li>--}}
                                <li>
                                    <a href="https://link.enrollio.ai/widget/form/KGLRY0zZJC4E7vG4cXRG" target="_blank">National Honor Society of Dance Arts</a>
                                </li>
                                {{--                        <li>--}}
                                {{--                            <a href="https://youtu.be/lcFVd9_ge50" data-bs-toggle="modal" data-bs-target="#studioModal">Studio</a>--}}
                                {{--                        </li>--}}
                                {{--                        <li>--}}
                                {{--                            <a href="https://keap.app/booking/breakinggrounddancecenter1/bgdc-tourmeeting" target="_blank">Schedule A Tour</a>--}}
                                {{--                        </li>--}}
                                {{--                        <li>--}}
                                {{--                            <a href="https://keap.page/ol717/makeup-class-request-form.html" target="_blank">Request Makeup Class</a>--}}
                                {{--                        </li>--}}
                                {{--                        <li>--}}
                                {{--                            <a href="https://keap.page/ol717/studio-protocols.html" target="_blank">Studio Protocols</a>--}}
                                {{--                        </li>--}}
                            </ul>
                        </div>
                </div>
                <div class="col-sm mb-3">
                    @include('/contact/create')
                </div>
                <div class="col-sm">
                    <div style="width: 100%"><iframe width="100%" height="335" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=101%20Castleton%20Street,%20Pleasantville,%20NY%2010570+(Breaking%20Ground%20Dance)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="mx-3">
                    <small>
                        <a class="text-decoration-none text-secondary" href="https://denliedesign.com" target="_blank">
                            Dance Website Design by Denlie Design
                        </a>
                    </small>
                </div>
                <div class="mx-3">
                    <small>
                        @guest
                            <a class="text-decoration-none text-secondary" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                        @else
                            <a class="text-decoration-none text-secondary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="studioModal" tabindex="-1" aria-labelledby="studioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studioModalLabel">Studio Tour</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/lcFVd9_ge50" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            {{--            <div class="modal-footer">--}}
            {{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>

<script>
    $('#studioModal').on('hidden.bs.modal', function (e) {
        // do something...
        $('#studioModal iframe').attr("src", jQuery("#studioModal  iframe").attr("src"));
    });
</script>

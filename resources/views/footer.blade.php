<div style="background: #333; color: white;">
    <div class="container">
        <div class="py-4" id="footer">
            <div class="row">
                <div class="col-sm-2">
                    <a href="/">
                        <img src="/images/bgdc-logo-white.png" alt="logo" class="img-fluid">
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0" style="background: #333; font-size: 0.8em;">
                            <a class="text-decoration-none text-secondary" href="https://denliedesign.com" target="_blank">
                                Dance Website Design by Denlie Design
                            </a>
                        </li>
                        @guest
                            <li class="list-group-item px-0 border-0" style="background: #333; font-size: 0.8em;">
                                <a class="text-decoration-none text-secondary" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                            </li>
                        @else
                            <li class="list-group-item px-0 border-0 dropdown" style="background: #333; font-size: 0.8em;">
                                <a class="text-decoration-none text-secondary" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="col-sm-3">
                    <p>
                        <h4 style="text-decoration: underline;">Contact Us</h4>
                        <br>
                        <ion-icon name="mail"></ion-icon>
                    <a class="text-white" style="text-decoration: none;" href="mailto:breakinggrounddance@hotmail.com">breakinggrounddance@hotmail.com</a>
                        <br><br>
                        <ion-icon name="call"></ion-icon>
                        914-747-3150
                        <br><br>
                        <ion-icon name="pin"></ion-icon>
                        101 Castleton Street,
                        <br>Pleasantville, NY 10570
                    </p>
                </div>
                <div class="col-sm mb-3">
                    @include('/contact/create')
                </div>
                <div class="col-sm">
                    <div style="width: 100%"><iframe width="100%" height="335" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=101%20Castleton%20Street,%20Pleasantville,%20NY%2010570+(Breaking%20Ground%20Dance)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background: #333; color: white;">
    <div class="container">
        <div class="pt-3 pb-2 d-flex justify-content-center text-center" id="top-nav">
            <div style="font-size: 0.85em;">
                <ion-icon name="mail"></ion-icon> <a class="text-white" style="text-decoration: none;" href="mailto:breakinggrounddance@hotmail.com">breakinggrounddance@hotmail.com</a>
                <div class="w-100 d-md-none my-2"></div>
                &nbsp; <ion-icon name="call"></ion-icon> 914-747-3150
                <div class="w-100 d-md-none my-2"></div>
                &nbsp; <button data-bs-toggle="modal" data-bs-target="#enrollioModal" class="btn-opacity shadow btn btn-red btn-family">Get Started Today</button>
                <div class="w-100 d-md-none my-2"></div>
                &nbsp; <a href="https://www.facebook.com/BGDC1?ref=hl" target="_blank" class="socials" style="font-size: 1.2em;"><ion-icon name="logo-facebook"></ion-icon></a>
                &nbsp; <a href="https://www.instagram.com/breakingground/" target="_blank" class="socials" style="font-size: 1.2em;"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </div>
</div>

<!-- Enrollio Modal -->
<div class="modal fade" id="enrollioModal" tabindex="-1" aria-labelledby="enrollioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <iframe

                        src="https://link.enrollio.ai/widget/form/aOW7QU0kxGbk9sCv0sJN"

                        style="width:100%;height:100%;border:none;border-radius:4px"

                        id="inline-aOW7QU0kxGbk9sCv0sJN"

                        data-layout="{'id':'INLINE'}"

                        data-trigger-type="alwaysShow"

                        data-trigger-value=""

                        data-activation-type="alwaysActivated"

                        data-activation-value=""

                        data-deactivation-type="neverDeactivate"

                        data-deactivation-value=""

                        data-form-name="Website Lead Capture Form"

                        data-height="628"

                        data-layout-iframe-id="inline-aOW7QU0kxGbk9sCv0sJN"

                        data-form-id="aOW7QU0kxGbk9sCv0sJN"

                        title="Website Lead Capture Form"

                    >

                    </iframe>

                    <script src="https://link.enrollio.ai/js/form_embed.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Enrollio Modal -->



    @can('update', \App\Text::class)
        <div id="honor-text-a" style="border:2px solid orange;" class="my-3 py-1 rounded shadow">
            <span class="fw-bold mx-3">hours text section A</span>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#textModal"
                    onClick="AddTextName('hours'); AddTextSection('A');">
                Create New
            </button>
            @include('/texts/form')
        </div>
    @endcan
    @foreach($texts as $text)
        @if($text->name == 'hours' && $text->section == 'A')
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                <div class="p-0 m-0">
                    {!! $text->content !!}
                    @include('/texts/admin')
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif
    @endforeach

<div style="background: #333; color: white;">
    <div class="container">
        <div class="pt-3 pb-2 d-flex justify-content-center text-center" id="top-nav">
            <div style="font-size: 0.85em;">
                <ion-icon name="mail"></ion-icon> <a class="text-white" style="text-decoration: none;" href="mailto:breakinggrounddance@hotmail.com">breakinggrounddance@hotmail.com</a>
                <div class="w-100 d-md-none"></div>
                &nbsp; <ion-icon name="call"></ion-icon> 914-747-3150
                <div class="w-100 d-md-none"></div>
                &nbsp; <a href="https://www.facebook.com/BGDC1?ref=hl" target="_blank" class="socials" style="font-size: 1.2em;"><ion-icon name="logo-facebook"></ion-icon></a>
                &nbsp; <a href="https://www.instagram.com/breakingground/" target="_blank" class="socials" style="font-size: 1.2em;"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>
    </div>
</div>


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

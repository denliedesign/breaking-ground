<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:title" content="Breaking Ground Dance Center | Pleasantville, NY">
        <meta property="og:description" content="Through quality dance lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.">
        {{--    <meta property="og:image" content="">--}}
        {{--    <meta property="og:url" content="">--}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="description" content="@yield('description', 'Through quality dance lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.')">

        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1951019892299614');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1951019892299614&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->

        <title>@yield('title', 'Breaking Ground Dance Center | Pleasantville, NY')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <style>
            /*@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Playfair+Display:wght@500&display=swap');*/
            /*@import url('https://fonts.googleapis.com/css2?family=Halant:wght@500&family=Nunito+Sans&display=swap');*/
            @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap');            /*@import "~livewire-sortable";*/
        </style>

        <!-- for sorting -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <!-- end for sorting -->

        <!-- Styles -->
        @livewireStyles
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

        <!-- Scripts -->
        <script src="https://cdn.tiny.cloud/1/5kctqg5sa09fd8d1o32j7i9xpvwu1wzubt2thxu7k565blzw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="/js/script.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RXQGRLDEJB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-RXQGRLDEJB');
        </script>
    </head>
    <body class="font-sans antialiased">

    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    @include('top-nav')
    @include('nav')
    @yield('content')
    @include('testimonials')
    @include('footer')
    <chat-widget
        location-id="3SXsC3jSZTP1tv95gRS4"
        style="--chat-widget-primary-color: #D01F30; --chat-widget-active-color:#D01F30 ;--chat-widget-bubble-color: #D01F30 ;"
        sub-heading="Enter your question below and a team member will get right back to you!"
        prompt-msg="Hi! It's Miss Laurel with Breaking Ground Dance Center. How can I help?"
        support-contact="breakinggrounddance@hotmail.com"
        success-msg="One of our team members will contact you within 24 hours!"
        prompt-avatar="https://images.leadconnectorhq.com/image/f_webp/q_100/r_45/u_https://cdn.filesafe.space/locationPhotos%2F3SXsC3jSZTP1tv95gRS4%2Fchat-widget-person?alt=media&token=0c97f141-fad3-4735-abf2-f7acb506b7cb"
        primary-color="#D01F30"
        show-consent-checkbox="true" >
    </chat-widget>
    <script
        src="https://widgets.leadconnectorhq.com/loader.js"
        data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" >
    </script>
    <div id="bottom"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        tinymce.init({
            selector: '#text-textarea',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        });

        tinymce.init({
            selector: '#txt-textarea',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        });
    </script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <script>
        $(document).ready(function(){
            $("#summerModal").modal('show');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAllStylesButton = document.getElementById('selectAllStyles');
            const styleCheckboxes = document.querySelectorAll('input[name="dance_style[]"]');

            selectAllStylesButton.addEventListener('click', function() {
                const isChecked = styleCheckboxes[0].checked; // Use the first checkbox as a reference
                styleCheckboxes.forEach(checkbox => {
                    checkbox.checked = !isChecked; // Toggle the checkboxes
                });
            });

            const selectAllDaysButton = document.getElementById('selectAllDays');
            const dayCheckboxes = document.querySelectorAll('input[name="day_of_week[]"]');

            selectAllDaysButton.addEventListener('click', function() {
                const isChecked = dayCheckboxes[0].checked; // Use the first checkbox as a reference
                dayCheckboxes.forEach(checkbox => {
                    checkbox.checked = !isChecked; // Toggle the checkboxes
                });
            });
        });
    </script>

    </body>
</html>

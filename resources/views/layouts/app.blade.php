<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="/logo.jpg">
    <meta name="viewport" content="width=device-width">

    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/alpinejs" defer=""></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>


    @livewireStyles
</head>

<body>

    <livewire:navbar>
    
    <section class="mt-16 px-3 py-3 w-full h-full" style="background-image: url(https://source.unsplash.com/featured/?makkah);background-size:cover;">
        {{ $slot }}
    </section>

    <a href="https://api.whatsapp.com/send?phone=628562820748&text=Assalamu%27alaikum%0D%0AHi+Kak%2C+saya+lihat+dari+web+sukabelajar.online%0D%0Antuk+tanya-tanya+dan+info+dulu+bisa?"
        target="_blank" class="whats-app wawidget"><img src="whatsapp.png" /></a>
    </a>
    <style>
        .whats-app {
            position: fixed;
            width: 100px;
            height: 50px;
            bottom: 300px;
            /* background-color: #25d366; */
            /* color: #FFF; */
            /* border-radius: 50px; */
            text-align: center;
            font-size: 20px;
            /* box-shadow: 3px 4px 3px #999; */
            /* left: 15px; */
            right: 2px;
            z-index: 100;
        }

        .my-float {
            margin-top: 10px;
        }
    </style>


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ5NJJC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<link rel="stylesheet" id="e-animations-css" href="https://retaliwisata.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.5.3" media="all">

    <livewire:footer>

    @livewireScripts
</body>

</html>
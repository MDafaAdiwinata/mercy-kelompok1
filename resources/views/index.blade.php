<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Website Logo --}}
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/img/mercy-logo.png') }}" />

    {{-- TailwindCSS - Flowbite & Script --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Home Mercedes Benz - Car Showroom</title>

    <style>
        .dot.active {
            background-color: var(--txtPrimary);
            transform: scale(1.25);
        }
    </style>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar></x-navbar>
    <x-modal-login></x-modal-login>

    {{-- Tutup Navbar --}}

    {{-- Jumbotron Landing Page --}}

    <section id="home" class="relative w-full h-screen overflow-hidden snap-start">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="{{ Vite::asset('resources/videos/jumbotron-video-landing-cinematic.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-bgPrimary/50"></div>
        <div
            class="relative z-10 px-4 mx-auto max-w-screen-xl h-screen flex flex-col items-center justify-center text-center py-24 lg:py-56">
            <h1
                class="mb-4 font-extrabold tracking-tight leading-none text-txtPrimary text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                The Best Or Nothing
            </h1>
            <p class="mb-8 font-normal text-txtPrimary text-lg md:text-2xl lg:text-3xl xl:text-4xl sm:px-16 lg:px-48">
                Experience unmatched luxury and performance with Mercedes-Benz. </p>
        </div>
    </section>

    {{-- Tutup Jumbotron Landing Page --}}

    {{-- Car Populer Section --}}

    <section id="carPopuler" class="bg-center bg-no-repeat bg-carPopuler h-screen flex items-center justify-start snap-start">
        <div class="px-6 mx-auto container flex flex-col items-start justify-center py-24 lg:py-56">
            <h1 class="text-txtPrimary font-bold text-3xl lg:text-5xl xl:text-6xl">
                The C-Class
            </h1>
            <p class="text-txtPrimary text-lg md:text-2xl lg:text-2xl xl:text-3xl mt-2 md:mt-4 w-auto md:w-1/3">
                Stay in your comfort zone. The C-Class embodies sporty luxury in its most modern form
            </p>
        </div>
    </section>

    {{-- Tutup Car Populer Section --}}

    {{-- CTA - Section --}}
    <section id="cta">
        <x-cta></x-cta>
    </section>
    {{-- Tutup CTA - Section --}}

    {{-- Find Dealer Section --}}

    <section id="findDealer" class="bg-bgSecondary2 snap-start">
        <div class="container mx-auto px-6 py-16 md:py-24 flex flex-col items-center justify-center">
            <h1 class="font-bold text-2xl md:text-2xl lg:text-4xl xl:text-5xl text-center text-txtPrimary">
                Find A Dealer
            </h1>
            <div class="w-full h-[300px] md:h-[450px] bg-center bg-cover bg-no-repeat rounded-2xl shadow-lg my-6 md:my-16"
                style="background-image: url('{{ Vite::asset('resources/img/find-dealer.png') }}');">
            </div>
            <h1
                class="font-medium text-md sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-center text-txtPrimary/80">
                Select a dealer to view opening times and contact details.
            </h1>
            <a href="dealer"
                class="text-txtPrimary bg-transparent hover:bg-bgSecondary/10 transition duration-300 font-medium rounded-2xl text-md md:text-xl px-5 py-2.5 hover:border-txtPrimary/80 mb-2 border border-txtPrimary/50 mt-6">
                Visit Here
            </a>

        </div>
    </section>

    {{-- Tutup Find Dealer Section --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}


</body>

</html>

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

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    {{-- Jumbotron Landing Page --}}

    <section class="relative w-full h-screen overflow-hidden">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="{{ Vite::asset('resources/videos/jumbotron-video-landing-cinematic.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-bgPrimary/50"></div>
        <div
            class="relative z-10 px-4 mx-auto max-w-screen-xl h-screen flex flex-col items-center justify-center text-center py-24 lg:py-56">
            <h1
                class="mb-2 font-extrabold tracking-tight leading-none text-txtPrimary text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                Welcome Back, USER!
            </h1>
            <p class="mb-8 font-normal text-txtPrimary text-lg md:text-2xl lg:text-3xl xl:text-3xl sm:px-16 lg:px-48">
                Our journey with Mercedes-Benz continues
        </div>
    </section>

    {{-- Tutup Jumbotron Landing Page --}}

    {{-- Car Populer Section --}}

    <section class="bg-bgAdd">
        <div class="container mx-auto flex flex-col px-4 py-12 md:py-24">
            <h1 class="text-center font-bold text-lg md:text-xl lg:text-2xl xl:text-3xl text-txtPrimary">Popular Choices
                for You</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                <div class="flex flex-col p-6 md:p-8 bg-bgPrimary rounded-2xl">
                    <h3 class="text-lg text-txtPrimary/80">Mercedes Benz</h3>
                    <h2 class="text-xl font-semibold text-txtPrimary mb-3">A200 Lorem Ipsum</h2>

                    <div class="bg-bgSecondary2 h-40 w-full mb-6 rounded-xl flex items-center justify-center my-4">
                        <span class="text-txtPrimary text-sm">Image Placeholder</span>
                    </div>
                    <a href="#" class="text-lg md:text-xl text-center text-txtPrimary hover:underline">Details
                        →</a>
                </div>
                <div class="flex flex-col p-6 md:p-8 bg-bgPrimary rounded-2xl">
                    <h3 class="text-lg text-txtPrimary/80">Mercedes Benz</h3>
                    <h2 class="text-xl font-semibold text-txtPrimary mb-3">A200 Lorem Ipsum</h2>

                    <div class="bg-bgSecondary2 h-40 w-full mb-6 rounded-xl flex items-center justify-center my-4">
                        <span class="text-txtPrimary text-sm">Image Placeholder</span>
                    </div>
                    <a href="#" class="text-lg md:text-xl text-center text-txtPrimary hover:underline">Details
                        →</a>
                </div>
                <div class="flex flex-col p-6 md:p-8 bg-bgPrimary rounded-2xl">
                    <h3 class="text-lg text-txtPrimary/80">Mercedes Benz</h3>
                    <h2 class="text-xl font-semibold text-txtPrimary mb-3">A200 Lorem Ipsum</h2>

                    <div class="bg-bgSecondary2 h-40 w-full mb-6 rounded-xl flex items-center justify-center my-4">
                        <span class="text-txtPrimary text-sm">Image Placeholder</span>
                    </div>
                    <a href="#" class="text-lg md:text-xl text-center text-txtPrimary hover:underline">Details
                        →</a>
                </div>
            </div>
            <a href="vehicles"
                class="text-txtPrimary bg-transparent hover:bg-bgSecondary/10 transition duration-300 w-fit mx-auto font-medium rounded-2xl text-md md:text-xl px-5 py-2 hover:border-txtPrimary/80 mb-2 border border-txtPrimary/50 mt-6">
                Browse All Vehicles
            </a>
        </div>
    </section>

    {{-- Tutup Car Populer Section --}}

    {{-- CTA - Section --}}
    <x-cta></x-cta>
    {{-- Tutup CTA - Section --}}

    {{-- Find Dealer Section --}}

    <section class="bg-bgSecondary2">
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

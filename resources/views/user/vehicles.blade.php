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

    <title>Vehicles - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    {{-- Car Populer Section --}}

    <section class="bg-center bg-no-repeat bg-carBannerList h-[800px] lg:h-[90%] flex items-center justify-start">
        <div class="px-6 mx-auto container flex flex-col items-start justify-center py-24 lg:py-56">
            <h1 class="text-txtPrimary font-bold text-3xl lg:text-5xl xl:text-6xl">
                Maybagh. AMG. <br>
                Perfomance.
            </h1>
            <hr class="my-8 border border-txtPrimary/40 w-full md:w-1/2">
            <p class="text-txtPrimary text-lg md:text-2xl lg:text-2xl xl:text-3xl w-auto md:w-1/2">
                Browse our list of cars and choose the one that best represents you. 
            </p>
        </div>
    </section>

    {{-- Tutup Car Populer Section --}}

    {{-- Daftar Mobil Section --}}

    <x-daftar-mobil></x-daftar-mobil>

    {{-- Tutup Daftar Mobil Section --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

</body>

</html>

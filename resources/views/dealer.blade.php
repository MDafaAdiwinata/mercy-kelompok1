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

    <title>Dealer Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar></x-navbar>
    <x-modal-login></x-modal-login>

    {{-- Tutup Navbar --}}

    {{-- Jumbotron Dealer --}}

    <section class="bg-center bg-no-repeat bg-bannerDealer h-[600px] md:h-[800px] flex items-center justify-start">
        <div class="px-6 mx-auto container h-full flex flex-col items-center justify-end py-24">
            <h1 class="text-txtPrimary font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                Find Your Nearest Mercedes-Benz Dealer
            </h1>
            <p class="text-txtPrimary text-lg md:text-2xl lg:text-2xl xl:text-3xl lg:mt-4">
                Find authorized Mercedes-Benz dealers near you.
            </p>
        </div>
    </section>

    {{-- Tutup Jumbotron Dealer --}}

    {{-- Daftar Dealer --}}

    <section class="bg-bgPrimary py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between text-txtPrimary mb-20 gap-4">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold">
                    Dealers Network
                </h2>

                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- Dropdown -->
                    <div>
                        <select id="city"
                            class="bg-bgPrimary text-txtPrimary border border-bgSecondary/50 text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-4 py-2.5">
                            <option selected>City or Province</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="bandung">Bandung</option>
                            <option value="surabaya">Surabaya</option>
                        </select>
                    </div>

                    <!-- Search -->
                    <div class="relative">
                        <input type="text" id="search"
                            class="bg-bgPrimary text-txtPrimary border border-bgSecondary/50 text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-6 py-2.5 pl-10"
                            placeholder="Search Dealers...">
                        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Dealer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-bgSecondary4 rounded-2xl overflow-hidden hover:bg-bgSecondary4/80 transition duration-300 border-2 border-bgSecondary4">
                    <img src="{{ Vite::asset('resources/img/dealer-1.png') }}" alt="Dealer"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg md:text-xl text-txtPrimary mb-1">
                            PT Panji Rama Otomotif - Jakarta Gandaria
                        </h3>
                        <p class="text-txtPrimary/80 text-lg mb-3">
                            Jl. Sultan Iskandar Muda No. 97
                            Gandaria Utara, Jakarta Selatan 12240.
                        </p>
                        <a href="#" class="text-txtPrimary text-lg mt-4 text-center block font-medium hover:underline">Maps</a>
                    </div>
                </div>
                <div class="bg-bgSecondary4 rounded-2xl overflow-hidden hover:bg-bgSecondary4/80 transition duration-300 border-2 border-bgSecondary4">
                    <img src="{{ Vite::asset('resources/img/dealer-1.png') }}" alt="Dealer"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg md:text-xl text-txtPrimary mb-1">
                            PT Panji Rama Otomotif - Jakarta Gandaria
                        </h3>
                        <p class="text-txtPrimary/80 text-lg mb-3">
                            Jl. Sultan Iskandar Muda No. 97
                            Gandaria Utara, Jakarta Selatan 12240.
                        </p>
                        <a href="#" class="text-txtPrimary text-lg mt-4 text-center block font-medium hover:underline">Maps</a>
                    </div>
                </div>
                <div class="bg-bgSecondary4 rounded-2xl overflow-hidden hover:bg-bgSecondary4/80 transition duration-300 border-2 border-bgSecondary4">
                    <img src="{{ Vite::asset('resources/img/dealer-1.png') }}" alt="Dealer"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg md:text-xl text-txtPrimary mb-1">
                            PT Panji Rama Otomotif - Jakarta Gandaria
                        </h3>
                        <p class="text-txtPrimary/80 text-lg mb-3">
                            Jl. Sultan Iskandar Muda No. 97
                            Gandaria Utara, Jakarta Selatan 12240.
                        </p>
                        <a href="#" class="text-txtPrimary text-lg mt-4 text-center block font-medium hover:underline">Maps</a>
                    </div>
                </div>
                <div class="bg-bgSecondary4 rounded-2xl overflow-hidden hover:bg-bgSecondary4/80 transition duration-300 border-2 border-bgSecondary4">
                    <img src="{{ Vite::asset('resources/img/dealer-1.png') }}" alt="Dealer"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg md:text-xl text-txtPrimary mb-1">
                            PT Panji Rama Otomotif - Jakarta Gandaria
                        </h3>
                        <p class="text-txtPrimary/80 text-lg mb-3">
                            Jl. Sultan Iskandar Muda No. 97
                            Gandaria Utara, Jakarta Selatan 12240.
                        </p>
                        <a href="#" class="text-txtPrimary text-lg mt-4 text-center block font-medium hover:underline">Maps</a>
                    </div>
                </div>
                <div class="bg-bgSecondary4 rounded-2xl overflow-hidden hover:bg-bgSecondary4/80 transition duration-300 border-2 border-bgSecondary4">
                    <img src="{{ Vite::asset('resources/img/dealer-1.png') }}" alt="Dealer"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg md:text-xl text-txtPrimary mb-1">
                            PT Panji Rama Otomotif - Jakarta Gandaria
                        </h3>
                        <p class="text-txtPrimary/80 text-lg mb-3">
                            Jl. Sultan Iskandar Muda No. 97
                            Gandaria Utara, Jakarta Selatan 12240.
                        </p>
                        <a href="#" class="text-txtPrimary text-lg mt-4 text-center block font-medium hover:underline">Maps</a>
                    </div>
                </div>
                <div class="bg-bgSecondary4 rounded-2xl overflow-hidden hover:bg-bgSecondary4/80 transition duration-300 border-2 border-bgSecondary4">
                    <img src="{{ Vite::asset('resources/img/dealer-1.png') }}" alt="Dealer"
                        class="w-full object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg md:text-xl text-txtPrimary mb-1">
                            PT Panji Rama Otomotif - Jakarta Gandaria
                        </h3>
                        <p class="text-txtPrimary/80 text-lg mb-3">
                            Jl. Sultan Iskandar Muda No. 97
                            Gandaria Utara, Jakarta Selatan 12240.
                        </p>
                        <a href="#" class="text-txtPrimary text-lg mt-4 text-center block font-medium hover:underline">Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tutup Daftar Dealer --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

</body>

</html>

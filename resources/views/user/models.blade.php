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

    <title>Models Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    {{-- Carousel --}}

    <section class="bg-bgPrimary">
        <div class="container mx-auto py-28 md:py-32 px-6 h-screen">
            <h1 class="text-2xl md:text-2xl lg:text-4xl xl:text-5xl text-center font-bold text-txtPrimary">
                Mercedes Benz Models
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl font-light text-center text-txtPrimary md:mt-2">
                Discover Our Most Popular Mercedes-Benz Models
            </p>

            <div id="default-carousel" class="relative w-full mt-12" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[400px] md:h-[600px] overflow-hidden">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="/detail/mobil-1">
                            <img src="{{ Vite::asset('resources/img/img-carousel-1.png') }}"
                                class="absolute rounded-3xl block h-[600px] w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 cursor-pointer"
                                alt="Mobil 1">
                        </a>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="/detail/mobil-1">
                            <img src="{{ Vite::asset('resources/img/img-carousel-1.png') }}"
                                class="absolute rounded-3xl block h-[600px] w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 cursor-pointer"
                                alt="Mobil 1">
                        </a>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="/detail/mobil-1">
                            <img src="{{ Vite::asset('resources/img/img-carousel-1.png') }}"
                                class="absolute rounded-3xl block h-[600px] w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 cursor-pointer"
                                alt="Mobil 1">
                        </a>
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-12 md:w-16 h-12 md:h-16 rounded-xl md:rounded-2xl bg-bgSecondary4 group-hover:bg-bgSecondary/20 group-focus:ring-2 group-focus:ring-txtPrimary/50 group-focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="bi bi-caret-left-fill w-6 md:w-10 h-6 md:h-10 text-txtPrimary rtl:rotate-180"
                            viewBox="0 0 16 16">
                            <path
                                d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-12 md:w-16 h-12 md:h-16 rounded-2xl bg-bgSecondary4 group-hover:bg-bgSecondary/20 group-focus:ring-2 group-focus:ring-txtPrimary/50 group-focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="bi bi-caret-right-fill w-6 md:w-10 h-6 md:h-10 text-txtPrimary rtl:rotate-180"
                            viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
    {{-- Tutup Carousel --}}

    {{-- Jenis Model Mercy 1 - Section --}}

    <section class="bg-bgPrimary text-txtPrimary py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-center text-txtPrimary">
                Explore Our Model Lineup
            </h1>
            <p class="text-md md:text-xl text-medium text-center text-txtPrimary mt-1 md:mt-2">
                Explore each series that defines the spirit of Mercedes-Benz.
            </p>

            <div class="grid gap-8 md:gap-10 lg:gap-16 lg:grid-cols-2 mt-16">
                <div class="relative group overflow-hidden shadow-lg border border-bgSecondary/20">
                    <img src="{{ Vite::asset('resources/img/a-class-model.png') }}"
                        class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="A-Class">
                    <div class="absolute bottom-0 left-0 p-4 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-txtPrimary">
                            A-Class - The Compact Luxury
                        </h3>
                        <p class="text-sm md:text-md lg:text-lg md:text-xl text-txtPrimary mt-2">
                            Smart, sporty, and modern. Perfect balance of agility and elegance in a compact form.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden shadow-lg border border-bgSecondary/20">
                    <img src="{{ Vite::asset('resources/img/c-class-model.png') }}"
                        class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="A-Class">
                    <div class="absolute bottom-0 left-0 p-4 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-txtPrimary">
                            C-Class - Crafted to Inspire
                        </h3>
                        <p class="text-sm md:text-md lg:text-lg md:text-xl text-txtPrimary mt-2">
                            A timeless symbol of sophistication. Comfort, style, and performance in harmony.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden shadow-lg border border-bgSecondary/20">
                    <img src="{{ Vite::asset('resources/img/e-class-model.png') }}"
                        class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="A-Class">
                    <div class="absolute bottom-0 left-0 p-4 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-txtPrimary">
                            E-Class - The Executive Choice
                        </h3>
                        <p class="text-sm md:text-md lg:text-lg md:text-xl text-txtPrimary mt-2">
                            Where innovation meets refinement. The E-Class delivers luxury and effortless power.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden shadow-lg border border-bgSecondary/20">
                    <img src="{{ Vite::asset('resources/img/s-class-model.png') }}"
                        class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                        alt="A-Class">
                    <div class="absolute bottom-0 left-0 p-4 md:p-8">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-txtPrimary">
                            S-Class - The Essence of Luxury
                        </h3>
                        <p class="text-sm md:text-md lg:text-lg md:text-xl text-txtPrimary mt-2">
                            The ultimate in comfort and technology. Drive the icon of true luxury.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] items-center gap-12 mt-32">
                <div>
                    <img src="{{ Vite::asset('resources/img/suv-model.png') }}"
                        class="rounded-2xl shadow-lg w-full h-[300px] md:h-[300px] object-cover" alt="SUV Series">
                </div>
                <div class="space-y-4 text-center md:text-start">
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold mb-2">SUV</h2>
                    <h3 class="text-xl lg:text-2xl font-semibold mb-3">Mercedes SUV Line<br>Power with Purpose</h3>
                    <p class="text-txtPrimary text-md md:text-xl">
                        From the city-ready GLA to the commanding GLS, every SUV combines
                        strength, comfort, and iconic Mercedes style.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr] items-center gap-12 mt-32">
                <div class="order-1 lg:order-2">
                    <img src="{{ Vite::asset('resources/img/amg-model.png') }}"
                        class="rounded-2xl shadow-lg w-full h-[300px] md:h-[300px] object-cover" alt="AMG Series">
                </div>
                <div class="order-2 lg:order-1 space-y-4 text-center lg:text-start">
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold mb-2">AMG</h2>
                    <h3 class="text-xl lg:text-2xl font-semibold mb-3">
                        Mercedes-AMG <br>
                        The Art of Performance
                    </h3>
                    <p class="text-txtPrimary text-md md:text-xl">
                        Born on the racetrack, perfected for the road. Experience pure adrenaline and precision
                        engineering.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] items-center gap-12 mt-32">
                <div>
                    <img src="{{ Vite::asset('resources/img/eq-model.png') }}"
                        class="rounded-2xl shadow-lg w-full h-[300px] md:h-[300px] object-cover" alt="EQ Series">
                </div>
                <div class="space-y-4 text-center md:text-start">
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold mb-2">
                        EQ
                    </h2>
                    <h3 class="text-xl lg:text-2xl font-semibold mb-3">
                        Mercedes-EQ <br>
                        The Future is Electric
                    </h3>
                    <p class="text-txtPrimary text-md md:text-xl">
                        Innovation meets sustainability. Discover a new era of performance with the all-electric
                        Mercedes-EQ.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr] items-center gap-12 mt-32">
                <div class="order-1 lg:order-2">
                    <img src="{{ Vite::asset('resources/img/maybach-model.png') }}"
                        class="rounded-2xl shadow-lg w-full h-[300px] md:h-[300px] object-cover" alt="Maybach Series">
                </div>
                <div class="order-2 lg:order-1 space-y-4 text-center lg:text-start">
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold mb-2">Maybach</h2>
                    <h3 class="text-xl lg:text-2xl font-semibold mb-3">
                        The Ultimate <br>
                        Expression of Luxury
                    </h3>
                    <p class="text-txtPrimary text-md md:text-xl">
                        Experience the pinnacle of automotive craftsmanship — where innovation meets unmatched comfort
                        and prestige.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Tutup Jenis Model Mercy 1 - Section --}}

    {{-- CTA - Dealer, Vehicless --}}

    <section class="bg-bgSecondary2">
        <div class="container mx-auto px-6 py-16 md:py-24 flex flex-col items-center justify-center">
            <div class="w-full h-[300px] md:h-[450px] bg-center bg-cover bg-no-repeat rounded-2xl shadow-lg"
                style="background-image: url('{{ Vite::asset('resources/img/find-dealer.png') }}');">
            </div>
            <h1 class="font-bold text-xl md:text-2xl lg:text-3xl text-center text-txtPrimary mt-10">
                Ready to Find Your Mercedes?
            </h1>
            <div class="flex flex-col md:flex-row items-center gap-4">
                <a href="vehicles"
                    class="text-txtPrimary bg-transparent hover:bg-bgSecondary/10 transition duration-300 font-medium rounded-2xl text-md md:text-xl px-5 py-2.5 hover:border-txtPrimary/80 mb-2 border border-txtPrimary/50 mt-6">
                    Visit All Vehicles
                </a>
                <a href=""
                    class="text-txtPrimary bg-transparent hover:bg-bgSecondary/10 transition duration-300 font-medium rounded-2xl text-md md:text-xl px-5 py-2.5 hover:border-txtPrimary/80 mb-2 border border-txtPrimary/50 mt-6">
                    Visit A Dealer
                </a>
            </div>
        </div>
    </section>

    {{-- Tutup CTA - Dealer, Vehicless --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

</body>

</html>

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

    <title>About Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar></x-navbar>
    <x-modal-login></x-modal-login>

    {{-- Tutup Navbar --}}

    {{-- Jumbotron Dealer --}}

    <section class="bg-center bg-no-repeat bg-bannerAbout h-[600px] md:h-[800px] flex items-center justify-center">
        <div class="px-6 mx-auto container flex flex-col items-center justify-center py-24 lg:py-42">
            <h1 class="text-txtPrimary font-light text-3xl lg:text-5xl xl:text-6xl w-2/3 text-center mb-6">
                Welcome to Mercedes-Benz The Future of Luxury Mobility
            </h1>
            <p class="text-txtPrimary text-lg md:text-2xl font-light text-center">
                Experience the harmony of innovation, craftsmanship, and performance <br> redefining every journey with
                timeless excellence.s</p>
        </div>
    </section>

    {{-- Tutup Jumbotron Dealer --}}

    {{-- About Us --}}

    <section class="bg-bgPrimary text-txtPrimary py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-center">
                <img src="{{ Vite::asset('resources/img/img-about-1.png') }}" alt="AMG"
                    class="rounded-2xl shadow-lg object-cover w-full h-[250px] md:h-[400px]" />
                <div class="bg-bgSecondary2 rounded-2xl p-8 text-center flex flex-col justify-center h-full">
                    <h2 class="text-xl md:text-2xl lg:text-4xl font-bold mb-3">
                        About Us
                    </h2>
                    <p class="text-txtPrimary text-md md:text-lg mb-5">
                        For over a century, Mercedes-Benz has led automotive innovation —
                        blending intelligent engineering, modern luxury, and timeless design
                        to shape the future of mobility.
                    </p>
                    <button
                        class="mx-auto bg-bgSecondary text-txtSecondary hover:bg-bgSecondary/80 font-semibold px-6 py-2 rounded-xl transition">
                        Learn More
                    </button>
                </div>
                <img src="{{ Vite::asset('resources/img/img-about-2.png') }}" alt="Mercedes"
                    class="rounded-2xl shadow-lg object-cover w-full h-[250px] md:h-[400px]" />
            </div>
            <div
                class="flex flex-col lg:flex-row items-center justify-around bg-bgSecondary2 py-12 md:py-6 px-6 rounded-2xl backdrop-blur-md gap-12 md:gap-8 mt-20">
                <img src="{{ Vite::asset('resources/img/amg-logo.png') }}" alt="AMG" class="w-1/2 lg:w-auto">
                <img src="{{ Vite::asset('resources/img/maybach-logo.png') }}" alt="Maybach" class="w-1/2 lg:w-auto">
                <img src="{{ Vite::asset('resources/img/eq-logo.png') }}" alt="EQ" class="w-1/2 lg:w-auto">
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mt-32">
                <img src="{{ Vite::asset('resources/img/img-about-detail.png') }}" alt="Mercedes Badge"
                    class="rounded-2xl shadow-lg object-cover w-full h-[300px] md:h-[400px]" />
                <div>
                    <h2 class="text-xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Why Choose Mercedes-Benz
                    </h2>
                    <p class="text-txtPrimary/80 text-lg md:text-2xl mb-6">
                        Mercedes-Benz combines timeless design, intelligent engineering,
                        and pure driving emotion to redefine automotive excellence.
                    </p>

                    <ul class="space-y-4 text-txtPrimary">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-bgSecondary mr-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-lg md:text-xl font-light text-txtPrimary">Unmatched Heritage — Over 130
                                years of engineering excellence.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-bgSecondary mr-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-lg md:text-xl font-light text-txtPrimary">Cutting-Edge Technology —
                                Intelligent systems that elevate every
                                drive.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-bgSecondary mr-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-lg md:text-xl font-light text-txtPrimary">Sustainable Innovation —
                                Pioneering the future of electric
                                mobility.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-bgSecondary mr-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-lg md:text-xl font-light text-txtPrimary">Personalized Service —
                                Experience premium customer care, tailored to
                                you.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    {{-- Tutup About Us --}}


    {{-- CTA Browse All Car --}}

    <section class="bg-bgPrimary text-txtPrimary py-20">
        <div class="container mx-auto px-6">
            <div
                class="bg-bgSecondary2 rounded-3xl flex flex-col xl:flex-row items-center justify-center gap-10 p-10 lg:p-16">
                <div class="max-w-xl mb-10 lg:mb-0 text-center lg:text-left space-y-6">
                    <h2 class="text-3xl lg:text-4xl font-bold">Experience the Future.</h2>
                    <p class="text-txtPrimary text-base lg:text-lg leading-relaxed">
                        Discover the perfect Mercedes-Benz for you. Explore our latest models and experience
                        the ultimate blend of performance and luxury.
                    </p>
                    <a href="vehicles"
                        class="inline-block border border-gray-400 text-white px-4 py-2 rounded-xl hover:text-txtSecondary transition duration-300 hover:bg-bgSecondary/90">
                        Browse All Models
                    </a>
                </div>

                <!-- Car Image -->
                <div class="flex justify-center lg:justify-end w-full lg:w-[50%]">
                    <img src="{{ Vite::asset('resources/img/img-mercy-cta-about.png') }}"
                        alt="Mercedes Car"
                        class="w-[350px] md:w-[420px] lg:w-[500px] object-contain drop-shadow-[0_20px_30px_rgba(0,0,0,0.5)]">
                </div>
            </div>
        </div>
    </section>

    {{-- Tutup CTA Browse All Car --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.3.0/dist/flowbite-datepicker.min.js"></script>

</body>

</html>

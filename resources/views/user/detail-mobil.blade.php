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

    <title>Detail Mobil Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    <section class="bg-bgAdd2">
        <div class="container mx-auto py-12 md:py-32 px-4">
            <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl text-start font-bold text-txtPrimary">
                Nama Mobil - Lorem Ipsum
            </h1>

            <!-- gunakan div grid bukan <grid> -->
            <div class="grid grid-cols-1 xl:grid-cols-[2fr_1fr] gap-8 mt-12 items-start">

                <!-- Bagian kiri: Gambar -->
                <div class="w-full">
                    <div class="grid gap-4 mx-auto">
                        <!-- Gambar besar -->
                        <div class="flex justify-center rounded-lg">
                            <img id="mainImage" class="rounded-lg object-contain w-full"
                                src="{{ Vite::asset('resources/img/img-mobil-besar.png') }}" alt="Main Image" />
                        </div>

                        <!-- Thumbnail -->
                        <div class="grid grid-cols-4 gap-4">
                            <img class="thumbnail rounded-lg cursor-pointer object-cover h-30 w-full transition"
                                src="{{ Vite::asset('resources/img/img-mobil-besar.png') }}" alt="1" />
                            <img class="thumbnail rounded-lg cursor-pointer object-cover h-30 w-full transition"
                                src="{{ Vite::asset('resources/img/img-mobil-besar.png') }}" alt="2" />
                            <img class="thumbnail rounded-lg cursor-pointer object-cover h-30 w-full transition"
                                src="{{ Vite::asset('resources/img/img-mobil-besar.png') }}" alt="3" />
                            <img class="thumbnail rounded-lg cursor-pointer object-cover h-30 w-full transition"
                                src="{{ Vite::asset('resources/img/img-mobil-besar.png') }}" alt="4" />
                        </div>
                    </div>
                </div>

                <!-- Bagian kanan: Price Card -->
                <div class="bg-bgAdd rounded-2xl p-6 flex flex-col justify-between">
                    <div>
                        <h2 class="text-md md:text-xl font-semibold mb-2 text-txtPrimary">Price Details</h2>
                        <p class="text-xl md:text-2xl text-txtPrimary mb-4">A200 Mercedes Benz</p>
                        <div class="flex justify-between items-center border-t border-bgSecondary pt-3 mb-6 mt-10">
                            <span class="text-txtPrimary text-lg md:text-xl">Total</span>
                            <span class="text-txtPrimary font-semibold text-xl md:text-2xl">Rp 000.000.000,00</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mt-10">
                        <button
                            class="bg-bgSecondary text-txtSecondary font-bold py-2.5 rounded-xl hover:bg-bgSecondary/80 transition text-lg md:text-xl">
                            Buy Now
                        </button>
                        <button
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary py-2.5 rounded-xl hover:bg-bgSecondary/10 text-md md:text-lg transition">Wishlist</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-start justify-start w-full mt-20 gap-4">
                <h1 class="text-lg md:text-xl lg:text-2xl text-start text-txtPrimary font-bold">
                    Description
                </h1>
                <p class="text-md md:text-lg lg:text-xl text-txtPrimary">
                    Mercedes-AMG sedans combine high performance with sporty sedan styling, offering powerful engines,
                    sharp handling, and premium AMG features. For example, the Mercedes-AMG A 35 Sedan features a 2.0L
                    turbo engine, 4MATIC all-wheel drive, and various driving modes for dynamic performance or everyday
                    comfort.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] mt-20 gap-8">
                <div class="flex flex-col bg-bgAdd w-full p-0 md:p-8 gap-4 rounded-2xl">
                    <h1 class="text-txtPrimary text-center md:text-start font-semibold text-xl lg:text-2xl mt-6 md:mt-0">
                        Additional Feature
                    </h1>
                    <table class="w-full text-md text-left rtl:text-right text-txtPrimary mb-4 md:mb-0">
                        <thead class="text-xs text-txtPrimary uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Features
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Value
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <th scope="row"
                                    class="px-6 py-2 font-medium text-txtPrimary/80 whitespace-nowrap">
                                    Cylinder
                                </th>
                                <td class="px-6 py-2">
                                    000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row"
                                    class="px-6 py-2 font-medium text-txtPrimary/80 whitespace-nowrap">
                                    Fuel Type
                                </th>
                                <td class="px-6 py-2">
                                    Lorem Ipsum
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col items-center justify-center w-full">
                    <div class="grid grid-col-1 gap-8">
                        <img src="{{ Vite::asset('resources/img/img-car-feature-1.png') }}" alt="Img Car Feature">
                        <img src="{{ Vite::asset('resources/img/img-car-feature-2.png') }}" alt="Img Car Feature">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                mainImage.style.opacity = 0;
                setTimeout(() => {
                    mainImage.src = thumb.src;
                    mainImage.style.opacity = 1;
                }, 200);
                thumbnails.forEach(t => t.classList.remove('ring-4', 'ring-blue-500'));
                thumb.classList.add('ring-4', 'ring-blue-500');
            });
        });
    </script>

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}



    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.3.0/dist/flowbite-datepicker.min.js"></script>

</body>

</html>

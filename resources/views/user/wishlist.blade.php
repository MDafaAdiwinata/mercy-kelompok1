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

    <title>Wishlist Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    {{-- Daftar Wishlist Car --}}

    <section class="bg-bgAdd2">
        <div
            class="container mx-auto border border-bgSecondar flex flex-col items-center justify-between gap-4 px-6 py-32">

            <div
                class="grid grid-cols-1 md:grid-cols-[1fr_2fr] items-center justify-center w-full">
                <div class="flex items-center justify-center md:justify-start mb-8 md:mb-0">
                    <h2 class="text-txtPrimary text-center md:text-start text-xl lg:text-2xl xl:text-3xl font-semibold">
                        Wishlist</h2>
                </div>
                <div class="flex items-center justify-end">
                    <!-- Form Section -->
                    <form class="flex flex-wrap items-center gap-3">
                        <div class="w-full md:w-auto">
                            <select id="category"
                                class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-2xl px-3 py-2.5">
                                <option selected disabled>Category</option>
                                <option value="sedan">Sedan</option>
                                <option value="suv">SUV</option>
                                <option value="hatchback">Hatchback</option>
                                <option value="coupe">Coupe</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <input type="text" id="simple-search"
                                class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-2xl block w-full px-3 py-2.5"
                                placeholder="Search Car..." required />
                            <button type="submit"
                                class="p-2.5 ms-2 text-md font-medium text-txtPrimary rounded-2xl border border-bgSecondary/80 hover:bg-bgSecondary/10">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 w-full mt-12 gap-8">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="bg-bgSecondary4 rounded-2xl overflow-hidden transition duration-300 w-full">
                        <div class="p-6">
                            <h3 class="text-sm text-txtPrimary/80">Mercedes Benz</h3>
                            <h2 class="text-lg font-semibold text-txtPrimary mb-3">A200 Lorem Ipsum</h2>

                            <div class="bg-bgSecondary3 h-40 w-full mb-6 rounded-xl flex items-center justify-center">
                                <span class="text-txtPrimary text-sm">Image Placeholder</span>
                            </div>

                            <div class="flex items-center justify-between text-gray-400 text-sm mb-6">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="bi bi-fuel-pump w-3 md:w-5 h-3 md:h-5 me-1 text-txtPrimary"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1q.846-.002 1.412.336c.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8z" />
                                    </svg>
                                    <span class="text-txtPrimary">8.0L</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-car-front-fill w-3 md:w-5 h-3 md:h-5 me-1 text-txtPrimary"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                    </svg>
                                    <span class="text-txtPrimary">Manual</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="bi bi-people-fill w-3 md:w-5 h-3 md:h-5 me-1 text-txtPrimary" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                    <span class="text-txtPrimary">
                                        4 People
                                    </span>
                                </div>
                            </div>

                            <p class="text-lg md:text-xl font-semibold mb-6 text-center text-txtPrimary">Rp
                                000.000.000,00</p>

                            <button type="button"
                                class="w-full border border-txtPrimary/50 text-txtPrimary py-2 rounded-xl bg-bgPrimary hover:bg-bgSecondary/10 transition duration-300">
                                BUY
                            </button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Tutup Program mendatang -->

    {{-- Tutup Daftar Wishlist Car --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.3.0/dist/flowbite-datepicker.min.js"></script>

</body>

</html>

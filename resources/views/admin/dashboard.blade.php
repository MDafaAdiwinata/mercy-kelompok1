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

    <title>Dashboard Admin Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat] bg-bgPrimary">

    {{-- Sidebar --}}

    <x-sidebar-admin></x-sidebar-admin>

    {{-- Tutup Sidebar --}}

    <!-- Main Content Dashboard -->
    <div class="px-4 md:px-4 lg:px-8 sm:ml-64">
        <div class="grid grid-cols-2 gap-4 mt-6 sm:mt-4">
            <div class="flex items-center justify-start h-10 md:h-20">
                <h1 class="text-lg md:text-2xl lg:text-2xl font-bold text-txtPrimary">
                    Dashboard
                </h1>
            </div>
            <div class="flex items-center justify-end h-10 md:h-20">
                <h1 class="text-end text-md md:text-lg lg:text-xl font-light text-txtPrimary/80">
                    Selamat Pagi, Admin!
                </h1>
            </div>
        </div>

        <hr class="w-full border border-txtPrimary/20 mt-6 sm:mt-2 mb-10">

        <div class="grid grid-cols-1 xl:grid-cols-[2fr_1fr] gap-10">

            <!-- Statistik Data -->
            <div>
                <h1 class="text-lg md:text-xl lg:text-2xl font-semibold mb-4 text-txtPrimary">
                    Statistik Data
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 lg:gap-6">
                    <div
                        class="flex flex-col items-center justify-center p-6 md:p-10 bg-bgPrimary hover:bg-bgSecondary/10 cursor-pointer rounded-3xl border border-bgSecondary/60 shadow-md hover:shadow-none transition duration-300 space-y-2 md:space-y-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-car-front-fill w-10 h-10 sm:w-15 sm:h-15 text-txtPrimary mb-3"
                            viewBox="0 0 16 16">
                            <path
                                d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                        </svg>
                        <h1 class="text-lg md:text-xl font-medium text-txtPrimary/80">Total Mobil Tersedia<h1>
                                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-txtPrimary mt-2">000</h1>
                    </div>

                    <div
                        class="flex flex-col items-center justify-center p-6 md:p-10 bg-bgPrimary hover:bg-bgSecondary/10 cursor-pointer rounded-3xl border border-bgSecondary/60 shadow-md hover:shadow-none transition duration-300 space-y-2 md:space-y-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-people-fill w-10 h-10 sm:w-15 sm:h-15 text-txtPrimary mb-3"
                            viewBox="0 0 16 16">
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        <h1 class="text-lg md:text-xl font-medium text-txtPrimary/80">Total Pelanggan</h1>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-txtPrimary mt-2">000</h1>
                    </div>

                    <div
                        class="flex flex-col items-center justify-center p-6 md:p-10 bg-bgPrimary hover:bg-bgSecondary/10 cursor-pointer rounded-3xl border border-bgSecondary/60 shadow-md hover:shadow-none transition duration-300 space-y-2 md:space-y-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cash-coin w-10 h-10 sm:w-15 sm:h-15 text-txtPrimary mb-3" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                            <path
                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                            <path
                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                        </svg>
                        <h1 class="text-lg md:text-xl font-medium text-txtPrimary/80">Total Penjualan</h1>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-txtPrimary mt-2">000</h1>
                    </div>

                    <div
                        class="flex flex-col items-center justify-center p-6 md:p-10 bg-bgPrimary hover:bg-bgSecondary/10 cursor-pointer rounded-3xl border border-bgSecondary/60 shadow-md hover:shadow-none transition duration-300 space-y-2 md:space-y-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-list-check w-10 h-10 sm:w-15 sm:h-15 text-txtPrimary mb-3" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                        </svg>
                        <h1 class="text-lg md:text-xl font-medium text-txtPrimary/80">Booking Service</h1>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-txtPrimary mt-2">000</h1>
                    </div>
                </div>
            </div>

            <!-- Akses Cepat -->
            <div class="mb-32 xl:mb-0">
                <h1 class="text-lg md:text-xl lg:text-2xl font-semibold mb-4 text-txtPrimary">Akses Cepat</h1>
                <div class="flex flex-col gap-3">
                    <a href=""
                        class="text-txtPrimary border border-bgSecondary/30 hover:border-bgSecondary/60 text-center rounded-2xl py-3 hover:bg-bgSecondary/20 transition">
                        Daftar Mobil
                    </a>
                    <a href=""
                        class="text-txtPrimary border border-bgSecondary/30 hover:border-bgSecondary/60 text-center rounded-2xl py-3 hover:bg-bgSecondary/20 transition">
                        Tinjau Booking
                    </a>
                    <a href=""
                        class="text-txtPrimary border border-bgSecondary/30 hover:border-bgSecondary/60 text-center rounded-2xl py-3 hover:bg-bgSecondary/20 transition">
                        Pelanggan Terdaftar
                    </a>
                    <a href=""
                        class="text-txtPrimary border border-bgSecondary/30 hover:border-bgSecondary/60 text-center rounded-2xl py-3 hover:bg-bgSecondary/20 transition">
                        Ttransaksi Pelanggan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tutup Main Content Dashboard -->

</body>

</html>

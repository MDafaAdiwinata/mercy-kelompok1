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

    <title>Booking Admin Mercedes Benz - Car Showroom</title>

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
                    Kelola Booking
                </h1>
            </div>
            <div class="flex items-center justify-end h-10 md:h-20">
                <h1 class="text-end text-md md:text-lg lg:text-xl font-light text-txtPrimary/80">
                    Selamat Pagi, Admin!
                </h1>
            </div>
        </div>

        <hr class="w-full border border-txtPrimary/20 mt-6 sm:mt-2 mb-10">

        <div class="flex flex-col gap-6">
            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-6 sm:gap-10 rounded-2xl">
                <form class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                    <div class="max-w-2xl">
                        <select id="urutkan"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md md:text-lg rounded-2xl focus:ring-bgSecondary/50 focus:border-bgSecondary/50 block w-full px-4 cursor-pointer hover:bg-bgSecondary/10 transition duration-300">
                            <option selected>
                                Urutkan
                            </option>
                            <option value="terbaru">Terbaru</option>
                            <option value="terakhir">Terakhir</option>
                        </select>
                    </div>
                    <div class="max-w-2xl flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="w-full">
                            <input type="text" id="simple-search"
                                class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md md:text-lg rounded-2xl focus:ring-bgSecondary/50 focus:border-bgSecondary/50 block w-full px-4"
                                placeholder="Cari Data..." required />
                        </div>
                        <button type="submit"
                            class="p-2.5 md:p-3 ms-2 text-sm font-medium text-txtPrimary bg-bgPrimary rounded-2xl border border-bgSecondary/50 hover:bg-bgSecondary/10 cursor-pointer">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>
                <div class="flex flex-col items-end justify-center">
                    <button type="button"
                        class="focus:outline-none text-txtSecondary bg-bgSecondary hover:bg-bgSecondary/80 font-medium rounded-2xl text-md px-5 py-2.5 shadow-lg hover:shadow-none transition duration-300 cursor-pointer">
                        Tambah
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center mt-4">
                <div
                    class="relative overflow-x-auto rounded-xl sm:rounded-2xl border border-bgSecondary/30 w-full">
                    <table class="w-full text-md text-left rtl:text-right text-txtPrimary/80 border-collapse">
                        <thead
                            class="text-lg text-txtPrimary bg-bgSecondary/20 uppercase border-b border-bgSecondary/10">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-bgPrimary border-b border-bgSecondary/20 hover:bg-bgSecondary/10">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-txtPrimary/80 whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right space-x-0 sm:space-x-4 space-y-2 sm:space-y-0">
                                    <a href="#"
                                        class="font-medium text-md sm:text-lg text-txtYellow hover:underline">
                                        UBAH
                                    </a>
                                    <a href="#"
                                        class="font-medium text-md lg:text-lg text-txtRed hover:underline">
                                        HAPUS
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Tutup Main Content Dashboard -->

</body>

</html>

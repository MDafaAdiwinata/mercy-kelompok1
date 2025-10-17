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

    <title>Profile Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    <section class="bg-bgAdd2">
        <div class="container mx-auto px-4">
            <div class="mt-15 rounded-lg py-8 md:py-32">
                <h1 class="text-xl md:text-xl lg:text-3xl text-center font-bold text-txtPrimary">
                    Profile
                </h1>
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 gap-6 mx-0 bg-bgSecondary4 hover:cursor-pointer p-4 md:px-8 md:py-10 mt-12 rounded-3xl">
                    <div class="mx-auto">
                        <img src="{{ Vite::asset('resources/img/profile-large.png') }}"
                            class="ms-0 h-30 sm:h-35 lg:h-60 xl:h-80 rounded-full md:w-auto" alt="Image Features">
                    </div>
                    <div class="text-center lg:text-start">
                        <h1 class="text-txtPrimary text-md md:text-xl xl:text-3xl font-bold">
                            Bio saya
                        </h1>
                        <h2 class="text-txtPrimary text-md md:text-lg xl:text-xl mt-8 mb-2">
                            Nama:
                            <span class="font-bold text-txtPrimary">
                                {{-- Ambil Data 'nama' disini --}}
                            </span>
                        </h2>
                        <p class="text-md md:text-lg xl:text-xl text-txtPrimary">
                            Email:
                            <span class="font-bold text-txtPrimary">
                                {{-- Ambil Data 'eamil' disini --}}
                            </span>
                        </p>
                        <p class="text-md md:text-lg xl:text-xl text-txtPrimary mt-2">
                            Telephone:
                            <span class="font-bold text-txtPrimary">
                                {{-- Ambil Data 'telephone' disini --}}
                            </span>
                        </p>
                    </div> 
                    <button data-modal-target="gambar-modal" data-modal-toggle="gambar-modal" class="text-md lg:text-lg text-txtPrimary font-light hover:cursor-pointer hover:underline mt-4" type="button">
                        Ubah Profile
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

</body>

</html>

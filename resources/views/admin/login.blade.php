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

    <title>Admin Login Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    <section class="bg-bgPrimary">
        <div class="container mx-auto px-4 flex flex-col gap-6 items-center justify-center h-screen">
            <form class="max-w-md w-full p-6 md:p-8 rounded-2xl border border-bgSecondary/30">
                <img src="{{ Vite::asset('resources/img/mercy-logo.png') }}" class="mx-auto mb-6" alt="">
                <h1 class="text-lg md:text-xl lg:text-2xl font-semibold text-txtPrimary text-center mb-8">
                    Login - Admin
                </h1>
                <div class="mb-5">
                    <label for="username"
                        class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">Username</label>
                    <input type="text" id="username"
                        class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary/60 focus:border-bgSecondary/60 block w-full px-3 py-2"
                        required />
                </div>
                <div class="mb-5">
                    <label for="password"
                        class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">Password</label>
                    <input type="password" id="password"
                        class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary/60 focus:border-bgSecondary/60 block w-full px-3 py-2"
                        required />
                </div>
                <button type="submit"
                    class="w-full text-txtSecondary bg-bgSecondary hover:bg-bgSecondary/80 font-bold text-lg md:text-xl px-5 py-2 text-center transition duration-300 rounded-xl mt-6">
                    Login
                </button>
            </form>
        </div>
    </section>

</body>

</html>

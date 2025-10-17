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

    <title>Home Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    <section class="bg-bgPrimary">
        <div class="container mx-auto px-4 flex flex-col gap-6 items-center justify-center h-screen">
            <form class="max-w-md w-full p-6 md:p-8 rounded-2xl border border-bgSecondary/30">
                <img src="{{ Vite::asset('resources/img/mercy-logo.png') }}" class="mx-auto mb-6" alt="">
                <h1 class="text-lg md:text-xl lg:text-2xl font-semibold text-txtPrimary text-center mb-8">
                    Register your account
                </h1>
                <div class="mb-5">
                    <label for="username"
                        class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">Username</label>
                    <input type="text" id="username"
                        class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary/60 focus:border-bgSecondary/60 block w-full px-3 py-2"
                        required />
                </div>
                <div class="mb-5">
                    <label for="email"
                        class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">Email</label>
                    <input type="email" id="email"
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
                <div class="mb-5">
                    <label for="telephone"
                        class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">Telephone</label>
                    <input type="number" id="telephone"
                        class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary/60 focus:border-bgSecondary/60 block w-full px-3 py-2"
                        required />
                </div>
                <button type="submit"
                    class="w-full text-txtSecondary bg-bgSecondary hover:bg-bgSecondary/80 font-bold text-lg md:text-xl px-5 py-2 text-center transition duration-300 rounded-xl mt-6">
                    Register
                </button>
            </form>
            <div class="flex items-center justify-between gap-4">
                <a href="/"
                    class="flex items-center text-txtPrimary bg-bgPrimary hover:bg-bgSecondary/10 border border-bgSecondary/50 font-medium rounded-xl text-lg px-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-arrow-90deg-left text-txtPrimary w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z" />
                    </svg>
                    <span class="ms-2">
                        Back
                    </span>
                </a>
                <a href="/"
                    class="flex items-center text-txtPrimary bg-bgSecondary4 hover:bg-bgSecondary/10 font-medium rounded-xl text-lg px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-question-lg text-txtPrimary w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                    </svg>
                    <span class="ms-2">
                        Help
                    </span>
                </a>

            </div>
        </div>
    </section>

</body>

</html>

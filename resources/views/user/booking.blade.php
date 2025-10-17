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

    <title>Booking Mercedes Benz - Car Showroom</title>

</head>

<body class="font-[montserrat]">

    {{-- Navbar --}}

    <x-navbar-user></x-navbar-user>

    {{-- Tutup Navbar --}}

    {{-- Jumbotron Dealer --}}

    <section class="bg-center bg-no-repeat bg-bannerBooking h-[600px] md:h-[800px] flex items-center justify-start">
        <div class="px-6 mx-auto container flex flex-col items-start justify-center py-24 lg:py-56">
            <h1 class="text-txtPrimary font-bold text-3xl lg:text-5xl xl:text-6xl">
                Book a Service
            </h1>
            <hr class="my-8 border border-txtPrimary/40 w-full md:w-1/2">
            <p class="text-txtPrimary text-lg md:text-2xl lg:text-2xl xl:text-3xl w-auto md:w-1/2">
                Fill in your details below and our team will contact you to schedule your Mercedes-Benz service
                appointment. </p>
        </div>
    </section>

    {{-- Tutup Jumbotron Dealer --}}

    <section class="bg-bgPrimary">
        <div class="container mx-auto px-6 py-20">
            <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-center text-txtPrimary">
                Service
                Booking Form
            </h1>
            <form class="lg:max-w-4xl xl:max-w-6xl lg:gap-12 grid grid-cols-1 lg:grid-cols-2 mx-auto mt-10">
                <div class="flex flex-col">
                    <div class="mb-8">
                        <label for="countries" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Salutation
                        </label>
                        <select id="countries"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2">
                            <option selected></option>
                            <option value="US">Mr</option>
                            <option value="CA">Mr</option>
                            <option value="FR">Mrs</option>
                        </select>
                    </div>
                    <div class="mb-8">
                        <label for="firstName" class="block mb-2 text-lg font-medium text-txtPrimary">
                            First Name
                        </label>
                        <input type="firstName" id="firstName"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2"
                            required />
                    </div>
                    <div class="mb-8">
                        <label for="lastName" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Last Name
                        </label>
                        <input type="lastName" id="lastName"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2"
                            required />
                    </div>
                    <div class="mb-8">
                        <label for="email" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Email
                        </label>
                        <input type="email" id="email"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2"
                            required />
                    </div>
                    <div class="mb-8">
                        <label for="number" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Mobile Number
                        </label>
                        <input type="number" id="number"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2"
                            required />
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-8">
                        <label for="countries" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Preferred Showroom
                        </label>
                        <select id="countries"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2">
                            <option selected></option>
                            <option value="US">Mr</option>
                            <option value="CA">Mr</option>
                            <option value="FR">Mrs</option>
                        </select>
                    </div>
                    <div class="mb-8">
                        <label for="countries" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Product Series
                        </label>
                        <select id="countries"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2">
                            <option selected></option>
                            <option value="US">Mr</option>
                            <option value="CA">Mr</option>
                            <option value="FR">Mrs</option>
                        </select>
                    </div>
                    <div class="mb-8">
                        <label for="selectDate" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Select Date
                        </label>
                        <input type="date" id="selectDate"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2"
                            required />
                    </div>
                    <div class="mb-8">
                        <label for="preferredTime" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Preferred Time
                        </label>
                        <select id="preferredTime"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-3 py-2">
                            <option selected></option>
                            <option value="US">8:00 AM - 12:00 PM</option>
                            <option value="CA">12:00 PM - 9:00 PM</option>
                        </select>
                    </div>
                    <div class="mb-8">
                        <label for="pesan" class="block mb-2 text-lg font-medium text-txtPrimary">
                            Message or Enquiry
                        </label>
                        <textarea id="pesan" rows="4"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary focus:border-bgSecondary block w-full px-2 py-2"></textarea>
                    </div>
                    <button type="submit"
                        class="mt-6 text-txtSecondary bg-bgSecondary hover:bg-bgSecondary/90 font-bold rounded-xl transition duration-200 text-lg px-5 py-2 text-center w-full md:w-auto">Submit</button>
                </div>
            </form>

        </div>
    </section>

    {{-- Form Input Service --}}



    {{-- Tutup Form Input Service --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Tutup Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.3.0/dist/flowbite-datepicker.min.js"></script>

</body>

</html>

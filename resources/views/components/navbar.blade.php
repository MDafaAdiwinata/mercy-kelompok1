<nav class="bg-bgPrimary/70 backdrop-blur-md fixed top-0 left-0 right-0 z-40">
    <div
        class="max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ Vite::asset('resources/img/mercy-logo.png') }}" class="w-10 md:w-12" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-modal-target="modalLogin" data-modal-toggle="modalLogin"
                class="text-txtPrimary rounded-lg md:rounded-xl font-medium text-sm md:text-md px-5 py-2 md:py-2.5 text-center border border-txtPrimary/80 hover:bg-txtPrimary/10 transiton duration-300">
                Login
            </button>
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-txtPrimary rounded-lg md:hidden hover:bg-txtPrimary/20 focus:outline-none focus:ring-2 focus:ring-txtPrimary/50"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-medium text-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent space-x-0 md:space-x-8 lg:space-x-16 space-y-2 md:space-y-0 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/vehicles" :active="request()->is('vehicles')">Vehicles</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="models" :active="request()->is('models')">Models</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="dealer" :active="request()->is('dealer')">Dealer</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="about" :active="request()->is('about')">About Us</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>

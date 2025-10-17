<nav class="bg-bgPrimary/70 backdrop-blur-md fixed top-0 left-0 right-0 z-40">
    <div
        class="max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ Vite::asset('resources/img/mercy-logo.png') }}" class="w-10 md:w-12" alt="Flowbite Logo" />
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="flex text-md rounded-full md:me-0" id="user-menu-button"
                aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10 rounded-full" src="{{ Vite::asset('resources/img/profile-user.png') }}"
                    alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-bgPrimary divide-y divide-bgSecondary/50 rounded-xl shadow-sm"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-md text-txtPrimary">Lorem Ipsum</span>
                    <span class="block text-sm text-txtPrimary/60 truncate">lorem@gmail.com</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="profile"
                            class="block px-4 py-2 text-sm text-txtPrimary/80 hover:bg-bgSecondary/10 ">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="wishlist"
                            class="block px-4 py-2 text-sm text-txtPrimary/80 hover:bg-bgSecondary/10 ">
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="/"
                            class="block px-4 py-2 text-sm text-txtPrimary/80 hover:bg-bgSecondary/10 ">
                            Sign out
                        </a>
                    </li>
                </ul>
            </div>
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
                    <x-nav-link-user href="home" :active="request()->is('user/home')">Home</x-nav-link-user>
                </li>
                <li>
                    <x-nav-link-user href="vehicles" :active="request()->is('user/vehicles')">Vehicles</x-nav-link-user>
                </li>
                <li>
                    <x-nav-link-user href="models" :active="request()->is('user/models')">Models</x-nav-link-user>
                </li>
                <li>
                    <x-nav-link-user href="dealer" :active="request()->is('user/dealer')">Dealer</x-nav-link-user>
                </li>
                <li>
                    <x-nav-link-user href="booking" :active="request()->is('user/booking')">Booking</x-nav-link-user>
                </li>
            </ul>
        </div>
    </div>
</nav>

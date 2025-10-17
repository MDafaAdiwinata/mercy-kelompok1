<section class="bg-bgPrimary text-txtPrimary min-h-screen py-20">
    <div class="container mx-auto px-6 flex flex-col lg:flex-row gap-10">

        <!-- Sidebar (sticky filter) -->
        <aside class="lg:w-1/4 bg-bgSecondary4 p-6 md:p-8 rounded-xl h-full lg:sticky top-24">
            <h2 class="text-xl font-semibold mb-6">Find Your Mercedes Match</h2>

            <!-- Search -->
            <form class="relative mb-6 flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <input type="text" id="simple-search"
                    class="bg-bgSecondary4 border border-txtPrimary/50 text-txtPrimary text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-3 p-2.5"
                    placeholder="Search Car..." required />
                <button type="submit"
                    class="p-3 ms-2 text-sm font-medium text-txtPrimary bg-bgPrimary/10 rounded-xl border border-bgSecondary/50 hover:bg-bgSecondary/10 transition duration-300 focus:ring-3 focus:outline-none focus:ring-bgSecodary/50">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>

            <div id="accordion-filters">
                <div class="mb-6">
                    <label for="categoriesCar" class="sr-only">
                        Categories
                    </label>
                    <select id="categoriesCar"
                        class="block py-2.5 w-full text-md text-gray-500 bg-bgSecondary4 border-0 border-b-2 border-bgSecondary/30 appearance-none focus:outline-none focus:ring-0 focus:borde-bgSecondary peer">
                        <option selected>Categories</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>

            <div id="accordion-filters">
                <div class="mb-6">
                    <label for="categoriesCar" class="sr-only">
                        Price
                    </label>
                    <select id="categoriesCar"
                        class="block py-2.5 w-full text-md text-gray-500 bg-bgSecondary4 border-0 border-b-2 border-bgSecondary/30 appearance-none focus:outline-none focus:ring-0 focus:borde-bgSecondary peer">
                        <option selected>Price</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>

            <div id="accordion-filters">
                <div class="mb-4">
                    <label for="categoriesCar" class="sr-only">
                        Models
                    </label>
                    <select id="categoriesCar"
                        class="block py-2.5 w-full text-md text-gray-500 bg-bgSecondary4 border-0 border-b-2 border-bgSecondary/30 appearance-none focus:outline-none focus:ring-0 focus:borde-bgSecondary peer">
                        <option selected>Models</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>

        </aside>

        <!-- Car Listing -->
        <div class="lg:w-3/4 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            <!-- Card -->
            @for ($i = 0; $i < 6; $i++)
                <div
                    class="bg-bgSecondary4 rounded-2xl overflow-hidden transition duration-300">
                    <div class="p-6">
                        <h3 class="text-sm text-txtPrimary/80">Mercedes Benz</h3>
                        <h2 class="text-lg font-semibold text-txtPrimary mb-3">A200 Lorem Ipsum</h2>

                        <div class="bg-bgSecondary3 h-40 w-full mb-6 rounded-xl flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Image Placeholder</span>
                        </div>

                        <div class="flex items-center justify-between text-gray-400 text-sm mb-6">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-fuel-pump w-3 md:w-5 h-3 md:h-5 me-1" viewBox="0 0 16 16">
                                    <path
                                        d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1q.846-.002 1.412.336c.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8z" />
                                </svg>
                                8.0L
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-car-front-fill w-3 md:w-5 h-3 md:h-5 me-1" viewBox="0 0 16 16">
                                    <path
                                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                </svg>
                                Manual
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" class="bi bi-people-fill w-3 md:w-5 h-3 md:h-5 me-1" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>
                                4 People
                            </div>
                        </div>

                        <p class="text-lg md:text-xl font-semibold mb-6 text-center">Rp 000.000.000,00</p>

                        <button type="button"
                            class="w-full border border-txtPrimary/50 text-txtPrimary py-2 rounded-xl hover:bg-bgSecondary/10 transition duration-300">
                            Details
                        </button>
                    </div>
                </div>
            @endfor
        </div>

    </div>
</section>

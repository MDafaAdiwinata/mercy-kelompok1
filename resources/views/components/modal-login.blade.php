<div id="modalLogin" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-bgPrimary rounded-xl shadow-md">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-bgSecondary/50 border-gray-200">
                <h3 class="text-lg md:text-xl font-semibold text-txtPrimary">
                    Sign in your account
                </h3>
                <button type="button"
                    class="end-2.5 text-txtPrimary/80 bg-transparent hover:bg-bgSecondary/20 hover:text-txtPrimary rounded-md text-md w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="modalLogin">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <label for="username" class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">
                            Username
                        </label>
                        <input type="username" name="username" id="username"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary/60 focus:border-bgSecondary/60 block w-full p-2.5"
                            required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-md md:text-lg font-medium text-txtPrimary">
                            Password
                        </label>
                        <input type="password" name="password" id="password"
                            class="bg-bgPrimary border border-bgSecondary/50 text-txtPrimary text-md rounded-xl focus:ring-bgSecondary/60 focus:border-bgSecondary/60 block w-full p-2.5 mb-4"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full text-txtSecondary bg-bgSecondary hover:bg-bgSecondary/80 font-bold text-lg md:text-xl px-5 py-2 text-center transition duration-300 rounded-xl">
                        Login
                    </button>
                    <div class="text-sm md:text-md font-medium text-txtPrimary/80 text-center">
                        Not registered? 
                        <a href="/user/register"
                            class="text-txtPrimary hover:underline">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

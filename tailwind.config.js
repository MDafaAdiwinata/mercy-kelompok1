/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            bgPrimary: "#000000",
            bgSecondary: "#f5f5f5",
            bgSecondary2: "#202020",
            bgSecondary3: "#0D0D0D",
            bgSecondary4: "#2E2E2E",
            bgAdd: "#252525",
            bgAdd2: "#151515",
            txtPrimary: "#FFFFFF",
            txtSecondary: "#151515",

            txtYellow: "#fabd23",
            txtRed: "#FD2D2E",
        },
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
            backgroundImage: {
                carPopuler: "url('/resources/img/car-populer.png')",
                carBannerList: "url('/resources/img/banner-list-car.png')",
                bannerDealer: "url('/resources/img/img-banner-dealer.png')",
                bannerBooking: "url('/resources/img/img-banner-booking.png')",
                bannerAbout: "url('/resources/img/img-banner-about.png')",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};

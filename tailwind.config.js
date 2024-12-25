import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.{js,jsx,ts,tsx,vue}",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Open Sans",
                    "Odoo Unicode Support Noto",
                    ...defaultTheme.fontFamily.sans,
                ],
                serif: [
                    "Questrial",
                    "Odoo Unicode Support Noto",
                    ...defaultTheme.fontFamily.serif,
                ],
            },
            colors: {
                hot: {
                    50: "#eafffd",
                    100: "#cafffb",
                    200: "#9cfffb",
                    300: "#57fffa",
                    400: "#0cfaff",
                    500: "#00dcea",
                    600: "#00aec4",
                    700: "#00899c",
                    800: "#0b6e7f",
                    900: "#0e5b6b",
                    950: "#023d4a",
                },
            },
            width: {
                calc: "calc(100% - 110px)",
            },
            animation: {
                slideup: "slideup 1s ease-in-out",
                slidedown: "slidedown 1s ease-in-out",
                slideleft: "slideleft 1s ease-in-out",
                slideright: "slideright 1s ease-in-out",
                wave: "wave 1.2s linear infinite",
                slowfade: "slowfade 2.2s ease-in-out",
            },
            keyframes: {
                slowfade: {
                    from: { opacity: 0 },
                    to: { opacity: 1 },
                },
                slideup: {
                    from: { opacity: 0, transform: "translateY(25%)" },
                    to: { opacity: 1, transform: "none" },
                },
                slidedown: {
                    from: { opacity: 0, transform: "translateY(-25%)" },
                    to: { opacity: 1, transform: "none" },
                },
                slideleft: {
                    from: { opacity: 0, transform: "translateX(-20px)" },
                    to: { opacity: 1, transform: "translateX(0)" },
                },
                slideright: {
                    from: { opacity: 0, transform: "translateX(20px)" },
                    to: { opacity: 1, transform: "translateX(0)" },
                },
                wave: {
                    "0%": { transform: "scale(0)" },
                    "50%": { transform: "scale(1)" },
                    "100%": { transform: "scale(0)" },
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};

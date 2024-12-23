import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                // sans: ["Open Sans", "Odoo Unicode Support Noto", "sans-serif"],
                sans: [
                    "Questrial",
                    "Odoo Unicode Support Noto",
                    ...defaultTheme.fontFamily.sans,
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
        },
    },
    plugins: [require("flowbite/plugin")],
};

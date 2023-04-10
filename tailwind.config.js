const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
              typography: {
                xl: {
                    css: {
                        fontSize: "1.31rem",
                        lineHeight: "1.5rem"/* 24px */,
                       
                    },
                },
                h1: {
                    fontSize: "1.875rem",
                    lineHeight: "1rem",
                },
                h2: {
                    fontSize: "1.75rem",
                    lineHeight: "1rem",
                },
            },
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
                serif: [
                    "Times New Roman",
                    "Inter",
                    ...defaultTheme.fontFamily.serif,
                ],
                nunito: ["Nunito"],
                inter: ["Inter"],
                roboto: ["Roboto"],
                georgia: ["Georgia"],
                garamond:["Garamond"],
            },
            boxShadow: {
                card: " 0px 0px 12px 0px rgba(38,41,61,0.14)",
                "blur-corner": "-14px 0px 14px 0px #fff",
                smallCard: " 0px 0px 8px 0px rgba(0,0,0,0.14)",
                smallCardHover: " 0px 0px 10px 0px rgba(0,0,0,0.25)",
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        plugin(function({ addBase }) {
            addBase({
               'html': { fontSize: "16px" },
             })
           }),
        require('tailwind-neumorphism'),
    ],
};

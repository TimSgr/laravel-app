import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                darkpurple: "#1E152A",
                error: "#EF2D56",
                white: "#FFFFFF",
                success: "#7BD389",
                warning: "#FFFC31",
                text: "#182825",
                blue: "#3D3B8E",
                darkblue: "#24234C",
                lightblue: "#9AC2F6", 
                newtext: "#F6F8FD",
                newtext2: "#EDF0FB",
                tierheimText: "#009034",
                tierheimMenuBg: "#00481A",
                paulaidee: "#CEDCB2",
                paulaundjasminidee: "#00240D",
              },
        },
    },
    plugins: [],
};

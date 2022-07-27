/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            sans: ['"Source Sans Pro"', 'Helvetica', 'Arial' ,'sans-serif']
        },
        extend: {
            fontFamily: {
                title: ['"Source Sans Pro"', 'Helvetica', 'Arial' ,'sans-serif']
                //title: ['Playfair Display', ...defaultTheme.fontFamily.sans],
                // nunito: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'dunkelgruen': '#1A3336',
                'gruen': '#24CD9C',
                'hellblau': '#f5faff',
                'schwarz': '#1D2120',
                'grau': '#D6D6D6',
                'hellgrau': '#F9F9F9',

            },
            backgroundImage: {
                'hellblau-unten-rund': "url('/img/bg-hellblau-gerundet.jpg')",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

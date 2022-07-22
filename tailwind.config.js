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
            sans: ['"Source Sans Pro"', 'sans-serif']
        },
        extend: {
            fontFamily: {
                title: ['Playfair Display', ...defaultTheme.fontFamily.sans],
                // nunito: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'msgelb': '#EDD947',
                'msrot': '#C42217',
                'msmarmor': '#F2EDDB',
                'msgruen': '#1D7151',
                'msblau': '#2B46BD',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

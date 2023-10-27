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
                'mittelgruen': '#2D8471',
                'gruen': '#24CD9C',
                'schwarz': '#1D2120',
                'weiss': '#FFFFFF',
                'hellgrau': '#F9F9F9',
                'grau': '#D6D6D6',
                'hellblau': '#f5faff',
                'textkleingrau': '#575A59',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

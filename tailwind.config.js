import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

export default {
    presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        fontFamily: {
            sans: ['Roboto', 'Helvetica', 'Arial', 'sans-serif'],
            title: ['Montserrat', 'sans-serif']
            /*title: ['"Source Sans Pro"', 'Helvetica', 'Arial' ,'sans-serif']*/
            //title: ['Playfair Display', ...defaultTheme.fontFamily.sans],
            // nunito: ['Nunito', ...defaultTheme.fontFamily.sans],
        },
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                primary: colors.emerald,
                custom: colors.emerald, //button in filament modal window (p.e. contact form)
                'buttonhover': '#24CD9C', //#a7f3d0
                'buttongruen': '#2D8471', //#20CE9D
                'dunkelgruen': '#1A3336',
                'mittelgruen': '#2D8471',
                'gruen': '#24CD9C',
                'hellgruen': '#F0F6F5',
                'hellblau': '#f5faff ',
                'schwarz': '#1D2120',
                'weiss': '#FFFFFF',
                'hellgrau': '#F9F9F9',
                'grau': '#D6D6D6',
                'textkleingrau': '#575A59',

                //erstellt mit https://coolors.co/1a3336-2d8471-24cd9c-f5faff-a9cef4
                'gunmetal': {
                    DEFAULT: '#1a3336',
                    100: '#050a0b',
                    200: '#0b1516',
                    300: '#101f21',
                    400: '#152a2c',
                    500: '#1a3336',
                    600: '#366b71',
                    700: '#52a2ab',
                    800: '#8bc1c7',
                    900: '#c5e0e3'
                },
                'viridian': {
                    DEFAULT: '#2d8471',
                    100: '#091b17',
                    200: '#12352e',
                    300: '#1b5044',
                    400: '#246a5b',
                    500: '#2d8471',
                    600: '#3eb69c',
                    700: '#6bccb7',
                    800: '#9cddcf',
                    900: '#ceeee7'
                },
                'mint': {
                    DEFAULT: '#24cd9c',
                    100: '#07291f',
                    200: '#0e513e',
                    300: '#167a5e',
                    400: '#1da37d',
                    500: '#24cd9c',
                    600: '#47dfb4',
                    700: '#75e7c7',
                    800: '#a3efd9',
                    900: '#d1f7ec'
                },
                'alice_blue': {
                    DEFAULT: '#f5faff',
                    100: '#003264',
                    200: '#0064c8',
                    300: '#2d96ff',
                    400: '#91c8ff',
                    500: '#f5faff',
                    600: '#f7fbff',
                    700: '#f9fcff',
                    800: '#fbfdff',
                    900: '#fdfeff'
                },

            },
        },
    },
}

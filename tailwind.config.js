import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Enable dark mode via a CSS class

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: [
        'text-red-200',
        'text-red-300',
        'text-red-500',
        'text-red-700',
        'text-red-900', // Add any other colors you use dynamically
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                red: {
                    500: '#ff0000', // Custom bright red
                },
            },
        },
    },

    plugins: [
        forms, // Form styles
        typography, // Typography styles
        // require('@tailwindcss/line-clamp'), // Line-clamp plugin
    ],
};

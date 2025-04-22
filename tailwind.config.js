import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'footer-menu': 'rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;',
                'corner':'0px 0px 20px 5px rgba(0,0,0,1);'
            },
            colors:{
                'pigmen-bg': '#0b061d',
                'pigmen-green': '#beed00',
                'pigmen-blue': '#001ef0',
                'pigmen-cyan': '#01dcfa',
                'pigmen-bgs': '#edebfe', 
                'gradient-blue': 'rgba(0,79,255,1)',
                'gradient-green': 'rgba(6,249,255,1)',
                'gradient-pink': 'rgba(217,38,255,1)',
                'gradient-gray': 'rgba(45,45,60,1)',
                'gradient-black': 'rgba(19,19,20,1)',
                'gradient-black2': 'rgb(23,23,26, 1)'
                //'pigmen-purple':'#6c71a9'              
            },
            fontFamily:{
                'aleo': ['Aleo', 'serif'],
                'poppins': ['Poppins', 'san serif']
            },
            rotate:{
                '225':'225deg'
            }
        },
    },

    plugins: [forms, typography], 
};

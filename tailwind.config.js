import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      'nunito': ['"Nunito"'],
      'poppins': ['Poppins, sans-serif']
    },
    extend: {
      colors: {
        'brand-gray': '#898989',
        'line-gray': '#cccccc',
        'brand-red': "#b0040e",
        'fade-red': '#e01e26',
        'fader-red': '#df1e26',
        'login-background': '#f0f0f0',
        'head-red': '#e30512',
        'footer-background': '#e4e5e6',
        'blueshade': "#1e282b",
      },
      lineHeight: {
        '47px': '47px',
        '30px': '30px',
        '47pxtovw': '2.44792vw',
        '30pxtovw': '1.5625vw',
        '47tolgvw': '3.06vw',
        '30tolgvw': '1.953vw',
      },
      backgroundImage: {
        'home-banner': "url('https://imgur.com/UUgecZ9.png')",
      }
    },
  },
  plugins: [],
}


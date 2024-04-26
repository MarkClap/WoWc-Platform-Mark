import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

const { addDynamicIconSelectors } = require('@iconify/tailwind')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: [
          {
            wowc_light: {
              "primary": "#dc2626",
              "primary-content": "#ffffff",
              "secondary": "#262626",
              "secondary-content": "#ffffff",
              "accent": "#f59e0b",
              "neutral": "#262626",
              "neutral-content": "#d4d4d8",
              "base-100": "#ffffff",
              "base-200": "#f5f5f5",
              "base-content": "#171717",
              "info": "#0ea5e9",
              "success": "#22c55e",
              "warning": "#eab308",
              "error": "#ef4444"
            },
          },
          {
            wowc_dark: {
              "primary": "#dc2626",
              "primary-content": "#f5f5f5",
              "secondary": "#e5e5e5",
              "secondary-content": "#f5f5f5",
              "accent": "#d97706",
              "neutral": "#262626",
              "neutral-content": "#a3a3a3",
              "base-100": "#171717",
              "base-content": "#f5f5f5",
              "info": "#0ea5e9",
              "success": "#22c55e",
              "warning": "#eab308",
              "error": "#ef4444"
            },
          },
          {
            wowc_neutral: {
              "primary": "#dc2626",
              "primary-content": "#ffffff",
              "secondary": "#404040",
              "secondary-content": "#ffffff",
              "accent": "#f59e0b",
              "neutral": "#262626",
              "neutral-content": "#a3a3a3",
              "base-100": "#262626",
              "base-content": "#f5f5f5",
              "info": "#0ea5e9",
              "success": "#22c55e",
              "warning": "#eab308",
              "error": "#ef4444"
            },
          },
        ],
        darkTheme: 'wowc_dark',
      },

    plugins: [forms, typography, require("daisyui"), addDynamicIconSelectors()],
};

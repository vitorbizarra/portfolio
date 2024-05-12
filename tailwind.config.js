/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    require('./vendor/tallstackui/tallstackui/tailwind.config.js')
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./vendor/tallstackui/tallstackui/src/**/*.php",
    "./app/Providers/*.php"
  ],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ['"Roboto Mono"', 'monospace'],
        'montserrat': ['"Montserrat"', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwind-dracula')('dracula', true),
    require('tailwindcss-animated')
  ],
}

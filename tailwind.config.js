/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'brand-red': '#D3122A',
        'brand-blue': '#0A192F',
        'brand-dark': '#111827',
      }
    },
  },
  plugins: [],
}

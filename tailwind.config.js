/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'my-black': '#220901',
        'dark-brown': '#621708',
        'red-brown': '#941B0C',
        'red-orange': '#BC3908',
        'dark-yellow': '#F6AA1C',
      },
      fontFamily: {
        'Lato': ['lato', 'sans-serif']
      }
    },
  },
  plugins: [],
}

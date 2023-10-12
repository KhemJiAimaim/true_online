/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens:{
        xs:"480px"
      },

      scale: {
        '175': '1.75',
      }
    },
  },
  plugins: [],
}
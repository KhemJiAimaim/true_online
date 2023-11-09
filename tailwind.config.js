/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        se: "375px",
        xs: "480px",
        dm: "912px"
      },

      scale: {
        '175': '1.75',
      },

    },
  },
  plugins: [],
}
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
        ss: "360px",
        se: "375px",
        es: "412px",
        xs: "480px",
        ex: "540px",
        xx: "820px",
        dm: "912px",
        uu: "1920px"
      },

      scale: {
        '115': '1.15',
      },

    },
  },
  plugins: [],
}
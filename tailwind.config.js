/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,php,js}",
    "./src/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      fontFamily: {
        'Poppins': ['Poppins'],
        },

      colors: {
        'orange': {
          '100': '#FF9900',
          '200': '#CF7C00'
        },
        },
    },
  },
  plugins: [],
}
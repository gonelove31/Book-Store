/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js}'],
  theme: {
    extend: {
      fontFamily: {
        footer: ['"Poppins"'],
      },

      boxShadow: {
        l5: ' 0px 3px 8px rgba(0, 0, 0, 0.24)',
      },
    },
  },
  plugins: [require('prettier-plugin-tailwindcss')],
};

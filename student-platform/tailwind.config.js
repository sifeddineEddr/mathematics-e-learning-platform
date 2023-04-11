/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        'brandSoftBrown' : '#FAF2EF',
        'brandRed' : '#C00005',
      }
    },
  },
  plugins: [],
}
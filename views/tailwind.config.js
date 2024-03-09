/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      gridTemplateColumns : {
        'basic' : 'repeat(auto-fit,minmax(120px,1fr))',
      }
    },
  },
  plugins: [],
 
};

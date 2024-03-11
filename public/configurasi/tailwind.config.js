/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../../app/views/**/*.php", "../../app/**/*.php", "../../public/js/*.js", "../../public/**/*.php", "../../app/**/*.html"],
  theme: {
    extend: {
      gridTemplateColumns: {
        basic: "repeat(auto-fit, minmax(120px, 1fr))",
      },
    },
  },
  plugins: [],
};

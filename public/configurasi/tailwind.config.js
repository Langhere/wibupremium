/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../../app/views/**/*.html", "../../app/**/*.php", "../js/*.js", "../../public/**/*.php"],
  theme: {
    extend: {
      gridTemplateColumns: {
        basic: "repeat(auto-fit, minmax(120px, 1fr))",
      },
    },
  },
  plugins: [],
};

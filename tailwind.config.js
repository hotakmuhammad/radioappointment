/** @type {import('tailwindcss').Config} */
export default {
    content: ["./views/_partiel/header.tpl", "./views/**/*.tpl", "./assets/**/*.js", "/assets/**/*.css"],
    theme: {
      extend: {
        colors: {
            // Common color used in project
        },
      },
    },
    plugins: [],
    purge: false,
  };
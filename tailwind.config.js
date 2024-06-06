/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      'node_modules/preline/dist/*.js',
    ],
    theme: {
      extend: {
        colors: {
            'my-custom-blue': '#17418A',
          },
      },
    },
    plugins: [
      require('preline/plugin'),
    ],
  }


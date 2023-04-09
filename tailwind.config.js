/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'w-4',
    'h-4',
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['"Poppins"'],
      },
      colors: {
        'base-light': 'hsl(var(--base-light))',
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    // themes: ['cupcake', 'forest'],
    themes: [
      {
        cupcake: {
          ...require('daisyui/src/colors/themes')['[data-theme=cupcake]'],
          '--base-light': '24,33.3%,99.1%',
        },
      },
      {
        forest: {
          ...require('daisyui/src/colors/themes')['[data-theme=forest]'],
          '--base-light': '0,12.2%,10%',
        }
      }
    ],
    darkTheme: "forest",
  },
}
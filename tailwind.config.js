/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        natural: {
          100: '#f0f4f0',
          500: '#5bb5ba',
          900: '#2b5557',
        }
      },
      fontFamily: {
        'ff' : ['klein-condensed-extrabold'],
        'sans' : ['DM Sans']
      }
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [
      {
        natural: {
          "primary": "#5bb5ba",
          "secondary": "#2b5557",
          "accent": "#feebd8",
          "neutral": "#2b5557",
          "base-100": "#ffffff",
        },
      },
    ],
  },
}


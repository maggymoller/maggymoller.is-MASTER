module.exports = {
  content: [
  "./pages/**/*.{js,ts,jsx,tsx}",
  "./components/**/*.{js,ts,jsx,tsx}",
],
darkMode: true, // or 'media' or 'class'
theme: {
  extend: {
          flex: {
              basis: '0 0 100%',
          },
          colors: {
              primary: { mint: "#18BCFF" },
              slate: {
                  50: "#f8fafc",
                  100: "#f1f5f9",
                  200: "#e5e5e5",
                  300: "#d4d4d4",
                  400: "#a3a3a3",
                  500: "#737373",
                  600: "#525252",
                  700: "#404040",
                  800: "#262626",
                  900: "#171717"
              }
          },
      }
      
},

plugins: [
  ],
  variants: {
      scrollbar: ['rounded']
  }
}
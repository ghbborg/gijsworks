module.exports = {
  darkMode: false,
    // purge: {
    //   enabled: true,
    //   content: [
    //     "../**.php",
    //     "../**/**.php",
    //     "./src/js/**.js",
    //   ]
    // },
  theme: {
    fontFamily: {
      sans: ["Libre Baskerville", "sans-serif"],
      display: ['Libre Baskervilleins', 'bold'],
    },
    extend: {
      fontSize: {
        'big': '3.375rem',
      },
      backgroundPosition: {
        'center-4': 'center 40%',
        '6-center': '60% center',
      },
      backgroundSize: {
        '50' : '50%',
        '40' : '40%',
      },
      flex: {
        '2' : '2 1 auto',
      },
      colors: {
        light: "#E5D6C2",
        lightish: "#F7E7CD",
        red: "#D30613",
        orange: "#ffaa22",
        dark: "#212121",
        green: '#0A807F',
        blue: '#CDF7F5',
        pinkish: '#F7DAF2',
        cta: "#946944",
        gray: "#C5C5C5",
        lightgray: "#979797",
        offwhite: '#e7e7e7',
      },
      lineHeight: {
        '12': '3rem',
        '16': '4rem',
      },
      width: {
        14.5: "3.6rem",
        90: "22.5rem",
        100: "25rem",
        110: "27.5rem",
        120: "30rem",
        130: "32.5rem",
        135: "33.75rem",
        140: "35rem",
        '17/20': "85%",
        'fit-content': 'fit-content',
      },
      spacing: {
        '1/4': "25%",
        13:  "3.25rem",
        '5vh' : '5vh',
        110: "27.5rem",
        120: "30rem",
        130: "32.5rem",
        135: "33.75rem",
        140: "35rem",
      },
      inset: {
        90: "22.5rem",
        100: "25rem",
        110: "27.5rem",
        120: "30rem",
        130: "32.5rem",
        135: "33.75rem",
        140: "35rem",
      },
      height: {
        90: "22.5rem",
        100: "25rem",
        110: "27.5rem",
        120: "30rem",
        130: "32.5rem",
        135: "33.75rem",
        140: "35rem",
        150: "36.75rem",
        160: "37.5rem",
        170: "38.75rem",
        180: "40rem",
        190: "41.25rem",
        200: "42.5rem",
        '75vh': "75vh",
        '85vh': '85vh',
        '90vh' : '90vh',
        '7/20': "35%",
        '17/20': "85%",
        '19/20': "95%",
        '9/10': "90%",
        '21/20': "105%",
        '11/10': "110%",
        '6/5': "120%",
      },
      screens: {
        "2lg": "1275px",
        "2xl": "1600px",
        "3xl": "1920px",
      },
      boxShadow: {
        link: "0 -2px 0 0 rgba(230, 60, 57, 1) inset",
      },
      keyframes: {
        wiggle: {
          "0%, 100%": {
            transform: "rotate(-5deg)",
          },
          "50%": {
            transform: "rotate(5deg)",
          },
        },
      },
      animation: {
        wiggle: "wiggle 1s ease-in-out infinite",
      },
    },
  },
  variants: ["responsive", "hover", "focus", "active"],
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    // ...
  ],
};

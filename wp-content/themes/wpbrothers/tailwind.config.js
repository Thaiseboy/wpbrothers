module.exports = {
  content: ["./**/*.{php,ts,js,twig}"],
  theme: {
    container: {
      center: true,
      padding: "1rem",
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1024px",
        xl: "1148px",
        "2xl": "1148px",
      },
    },
    fontFamily: {
      heading: ['"Plus Jakarta Sans", sans-serif'],
      body: ['"Plus Jakarta Sans", sans-serif'],
      icon: ['"Font Awesome 6 Free"'],
    },
    colors: {
      primary: {
        50: "#FFEFE8", // Zeer lichte pastel oranje
        200: "#FFC6A8", // Lichte oranje tint 
        300: "#FF9368", // medium oranje tint
        500: "#FF470B", // Base kleur
        600: "#FF3A05", // Hover voor knoppen
        700: "#CC2E04", // Active donker oranje
        900: "#992302", // Donker Oranje, voor schaduw of tekstaccent
      },
      secondary: {
        50: "#E7F3FF", // Zeer lichte blauw
        300: "#85C4FF", // Lichte blauw voor hoever of labels
        500: "#007BFF", // Base kleur
        600: "#005BBB", // Hover voor blauwe knoppen
        700: "#004699", // Active kleur diepere blauw
      },
      neutral: {
        0: "#FFFFFF", // Wit
        100: "#F5F5F5", // Zeer licht grijs
        300: "#D9D9D9", // Licht grijs
        500: "#A6A6A6", // Medium grijs
        700: "#4D4D4D", // Donker grijs
        900: "#1A1A1A", // Zwart
      },
      success: {
        50: "#E3F9E8", // Zeer lichte groen
        300: "#6FD08F", // Medium groen
        500: "#3CA355", // Base kleur voor succesberichten
        700: "#2A7A3E", // Donker groen
      },
      warning: {
        50: "#FFF7E5", // Zeer lichte geel/oranje voor achtergrondnotificaties
        300: "#FFC966", // Medium oranje-geel hover effect
        500: "#F4A525", // Base
        700: "#D78C14", // Donker oranje - geel 
      },
      error: {
        50: "#FEEAEA", // Zeer lichte rood 
        300: "#F49A9A", // Medium rood 
        500: "#C84041", // Base
        700: "#992F32", // Donker rood 
      },
      buttonPrimary: {
        idle: "#FF470B", // Oranje, basis
        hover: "#CC2E04", // Donker oranje
        active: "#992302",// Donkerder oranje
      },
      buttonSecondary: {
        idle: "#FFEFE8", // Zeer lichte oranje 
        hover: "#FFC6A8", // Lichte oranje 
        active: "#FF9368", // Donkerder oranje 
      },
      buttonLink: {
        idle: "#007BFF", // Primaire blauw
        hover: "#005BBB", // Donkerder blauw
        active: "#004699", // Nog donkerder blauw
      },
      white: "#ffffff",
      black: "#000000",
      blue: {
        50: "#E7F3FF", // Licht blauw
        300: "#85C4FF", // Hover blauw
        500: "#007BFF", // Primaire blauw
        700: "#004699", // Donkerder blauw
      },
      text: {
        head: "#1A1A2E", // Voor headers
        body: "#2E2E50", // Voor tekst
        "body-light": "#4B4B72", // Voor lichtere tekst
        placeholder: "#7C7C99", // Voor placeholders
      },
    },
    extend: {
      fontSize: {
        h1: ["4.5rem", { lineHeight: "4.5rem", fontWeight: 700 }],
        h2: ["3rem", { lineHeight: "2.5rem", fontWeight: 700 }],
        h3: ["2.25rem", { lineHeight: "3.5rem", fontWeight: 700 }],
        h4: ["1.3125rem", { lineHeight: "1.3125rem", fontWeight: 700 }],
        h5: ["1.125rem", { lineHeight: "1.125rem", fontWeight: 700 }],
        h6: ["1rem", { lineHeight: "1.5rem", fontWeight: 700 }],
        p: [
          "1.25rem",
          { lineHeight: "1.5rem", letterSpacing: "0.2px", fontWeight: 400 },
        ],
        tag: ["0.75rem", { lineHeight: "1rem", fontWeight: 700 }],
      },
      aspectRatio: {
        "4/3": "4 / 3",
        "3/4": "3 / 4",
      },
      borderWidth: {
        DEFAULT: "1px",
        2: "2px",
        4: "4px",
      },
    },
  },
  plugins: [],
};
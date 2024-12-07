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
        50: "#FFEFE8",
        200: "#FFC6A8",
        300: "#FF9368",
        500: "#FF470B", // Base kleur
        600: "#FF3A05", // Hover
        700: "#CC2E04", // Active
        900: "#992302",
      },
      secondary: {
        50: "#E7F3FF",
        300: "#85C4FF",
        500: "#007BFF", // Base kleur
        600: "#005BBB", // Hover
        700: "#004699", // Active
      },
      neutral: {
        0: "#FFFFFF", // White
        100: "#F5F5F5",
        300: "#D9D9D9",
        500: "#A6A6A6", // Base kleur
        700: "#4D4D4D",
        900: "#1A1A1A", // Black
      },
      success: {
        50: "#E3F9E8",
        300: "#6FD08F",
        500: "#3CA355", // Base
        700: "#2A7A3E",
      },
      warning: {
        50: "#FFF7E5",
        300: "#FFC966",
        500: "#F4A525", // Base
        700: "#D78C14",
      },
      error: {
        50: "#FEEAEA",
        300: "#F49A9A",
        500: "#C84041", // Base
        700: "#992F32",
      },
      buttonPrimary: {
        idle: "#FF470B",
        hover: "#CC2E04",
        active: "#992302",
      },
      buttonSecondary: {
        idle: "#FFEFE8",
        hover: "#FFC6A8",
        active: "#FF9368",
      },
      buttonLink: {
        idle: "#007BFF",
        hover: "#005BBB",
        active: "#004699",
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
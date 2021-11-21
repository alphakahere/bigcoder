module.exports = {
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'cblue':'#0C71AB',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

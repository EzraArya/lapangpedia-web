/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'white' :{
          '100' : '#FFFFFF',
        },
        'grey' : {
          '100' : '#ABABAB'
        },
        'blue' : {
          '500' : '#000F42'
        }
      },
    fontFamily: {
      'montserrat': ['Montserrat', 'sans-serif'],
    }},
  },
  plugins: [],
}
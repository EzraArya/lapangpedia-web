/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
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
          '500' : '#000F42',
          '100' : '#99B0FF'
        },
        'purple' : {
          '100' : '#685DE2',
          '200' : '#4436E6'
        }
      },
    fontFamily: {
      'montserrat': ['Montserrat', 'sans-serif'],
    },
    variants: {
      extend: {
        backgroundColor: ['active'],
        textColor: ['active'],
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
}
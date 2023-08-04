/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require('fast-glob').sync([
    './*.php',
    './src/**/*.{js,jsx,ts,tsx}',
    './node_modules/flowbite/**/*.js',
    './node_modules/tw-elements/dist/js/**/*.js'
  ]),
  darkMode: 'class',
  theme: {
    fontFamily: {
			
			'sans': ["Montserrat", 'sans-serif']
	  
		},
    screens: {
      'xs': '425px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px'
    },
    extend: {},

  },

  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/typography'),
    require('tw-elements/dist/plugin.cjs'),
    require('flowbite/plugin')
  ],
}

let mix = require('laravel-mix');

mix.js('src/scripts/main.js', 'scripts').sass('src/styles/main.scss', 'styles').setPublicPath('dist').options({
  postCss: [require('tailwindcss')]
}).browserSync({
  proxy: "localhost:8888/",
  files: [`./**/*.php`, `./src/**/*.js`, `./src/**/*.scss`]
});
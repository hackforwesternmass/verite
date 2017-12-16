var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/app.css');
    mix.copy('./node_modules/jquery-ui-dist/images', 'public/css/images');
    mix.copy('./node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
    //mix.copy('./resources/assets/js/chart-filters.js', 'public/js/chart-filters.js');
    mix.scripts(
        [
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            './node_modules/jquery-ui-dist/jquery-ui.min.js',
            './node_modules/select2/dist/js/select2.min.js',
            //'./node_modules/chart.js/dist/Chart.js'
      ],
      'public/js/all.js'
  );
});

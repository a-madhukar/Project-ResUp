var elixir = require('laravel-elixir');

var paths={
	'bootstrap_js':'./node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 
	'bootstrap_fonts':'./node_modules/bootstrap-sass/assets/fonts'
}

elixir(function(mix) {
    mix.sass('app.scss')
    	.copy(paths.bootstrap_js,'resources/assets/js/bootstrap')
    	.copy(paths.bootstrap_fonts,'public/fonts')
    	.scripts(['bootstrap/bootstrap.js'],'public/js/bootstrap/bootstrap.js')
    	.scripts(['components/*.js','main.js'],'public/js/all.js');
});

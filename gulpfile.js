var gulp = require('gulp');
var plugins = require("gulp-load-plugins")({
  pattern: ['gulp-*', 'gulp.*'],
  replaceString: /\bgulp[\-.]/
});

var wpDest = 'cms/wp-content/themes/scm-theme/';
var basePath = 'node_modules/';

var plumberErrorHandler = {
	errorHandler: plugins.notify.onError({
		title: 'Gulp',
		message: 'Error: <%= error.message %>'
	})
};
gulp.task('sass', function(){
	return gulp.src(wpDest + 'scss/style.scss')
		.pipe(plugins.plumber(plumberErrorHandler))
		.pipe(plugins.sass())
		.pipe(gulp.dest(wpDest))
		.pipe(plugins.livereload());
});

gulp.task('js', function(){
	return gulp.src([
			wpDest + '/js/*.js',
			basePath + '/bootstrap-sass/assets/javascripts/bootstrap.js',
			basePath + '/fastclick/lib/fastclick.js'
		])
		// .pipe(plugins.jshint())
		// .pipe(plugins.jshint.reporter('fail'))
		.pipe(plugins.concat('main.js'))
		.pipe(gulp.dest(wpDest))
		.pipe(plugins.livereload());
});

// still not working
gulp.task('concat-js', function () {
    return gulp.src(wpDest + '*.php')
        .pipe(plugins.useref())
        .pipe(gulp.dest(wpDest));
});

 gulp.task('watch',  function(){
 	plugins.livereload.listen();
 	gulp.watch(wpDest + 'scss/**/*.scss', ['sass']);
 	gulp.watch(wpDest + 'scss/*.scss', ['sass']);
 	gulp.watch(wpDest + 'js/*.js', ['js']);
 });

 gulp.task('build', function(){
  return gulp.src(wpDest + 'scss/style.scss')
		.pipe(plugins.plumber(plumberErrorHandler))
		.pipe(plugins.sass())
	    .pipe(plugins.cssnano())
	    .pipe(plugins.rename({suffix: '.min'}))
		.pipe(gulp.dest(wpDest))
 })

gulp.task('default', ['sass', 'js', 'watch'], function(){

    console.log('Start Gulp Tasks')

});

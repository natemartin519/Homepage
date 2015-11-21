var gulp = require('gulp');

gulp.task('default', function() {
  // place code for your default task here
});

gulp.task('autoprefixer', function () {
	var postcss      = require('gulp-postcss');
	var sourcemaps   = require('gulp-sourcemaps');
	var autoprefixer = require('autoprefixer');

    return gulp.src('./src/*.css')
        .pipe(sourcemaps.init())
        .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./dest'));
});
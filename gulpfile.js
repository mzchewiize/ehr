var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

gulp.task('default', function() {
	watch('./views/scss/*.scss', function () {
		gulp.src('./views/scss/*.scss')
			.pipe(sass())
			.pipe(gulp.dest('./views/css'));
	});
});
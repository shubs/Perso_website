var uglify = require('gulp-uglify');
var gulp = require('gulp');

gulp.task('compress', function() {
  gulp.src('lib/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist'))
});

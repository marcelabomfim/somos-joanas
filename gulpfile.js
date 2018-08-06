const gulp = require('gulp');
const sass = require('gulp-sass');

// compile .scss to .css files
gulp.task('sass', function() {
  return gulp.src(['src/scss/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest("dist/css"));
});

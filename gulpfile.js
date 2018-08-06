const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');

// compile .scss to .css files
gulp.task('sass', function() {
  return gulp.src(['src/scss/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest("dist/css"))
    .pipe(browserSync.stream());
});

// watch sass & serve
gulp.task('serve', ['sass'], function() {
  browserSync.init({
    server: "./"
  });
  gulp.watch(['src/scss/*.scss'], ['sass']);
  gulp.watch("*.html").on('change', browserSync.reload);
});

// default task
gulp.task('default', ['serve']);


/* File: gulpfile.js */

// grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass');

// create a default task and just log a message
gulp.task('default', function() {
  return gutil.log('Gulp is running!')
});

gulp.task('styles', function() {
  gulp.src('wp-content/themes/primusBuildersInc/sass/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./wp-content/themes/primusBuildersInc/css'))
})

//Watch task
gulp.task('default' ,function() {
  gulp.watch('wp-content/themes/primusBuildersInc/sass/**/*.scss',['styles']);
});

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

function swallowError(error) {
    // If you want details of the error in the console
    console.log(error.toString());
    this.emit('end');
}

// Compile Sass & Inject Into Browser
gulp.task('sass', function () {
    return gulp.src(['scss/**/*.scss'])
        .pipe(sass())
        .on('error', swallowError)
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
});

// Watch Sass & Serve
gulp.task('serve', ['sass'], function () {
    browserSync.init({
        server: './'
    });

    gulp.watch(['scss/**/*.scss'], ['sass']);
    gulp.watch('*.html').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
var gulp        = require('gulp');
var sass        = require('gulp-sass');
var browserSync = require('browser-sync').create();

function swallowError(error) {
    console.log(error.toString());
    this.emit('end');
}

gulp.task('sass', function () {
    return gulp.src(['scss/**/*.scss'])
               .pipe(sass())
               .on('error', swallowError)
               .pipe(gulp.dest('css'))
               .pipe(browserSync.stream());
});

gulp.task('serve', ['sass'], function () {
    browserSync.init({
        server: './'
    });

    gulp.watch(['scss/**/*.scss'], ['sass']);
    gulp.watch('*.html').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
'use strict';
const gulp = require('gulp'),
      sass = require('gulp-sass'),
      browserSync = require('browser-sync');

const reload = done => {
    browserSync.reload();
    done();
}

browserSync.init({
    proxy: 'http://192.168.64.2/wordpress/',
    middleware: undefined
})

gulp.task('transpileSass', function() {
    return gulp.src('./scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'));
})

gulp.watch('./scss/**/*.scss', {interval: 1000}, gulp.series('transpileSass', reload))
gulp.watch('./**/*.php', {interval: 1000}, gulp.series('transpileSass', reload))


gulp.task('sass', gulp.series('transpileSass'));
gulp.task('default', gulp.series('sass'));
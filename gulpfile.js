'use strict';
const gulp = require('gulp'),
      sass = require('gulp-sass'),
      webpack = require('webpack'),
      webpackStream = require('webpack-stream'),
      named = require('vinyl-named'),
      uglifyJsPlugin = require('uglify-js-plugin'),
      browserSync = require('browser-sync'),
      webpackConfig = require('./webpack.config');
      

const config = {
    scssIn: './scss/**/*.scss',
    scssOut: './build/css',
    styleScssIn: './scss/style.scss',
    styleScssOut: './',
    jsIn: './js/**/*.js',
    jsOut: './build/js'
}

const reload = done => {
    browserSync.reload();
    done();
}

browserSync.init({proxy: 'http://192.168.64.2/wordpress/'})

gulp.task('transpileSass', () => {
    return gulp.src(["!"+config.styleScssIn,config.scssIn])
    .pipe(sass())
    .pipe(gulp.dest(config.scssOut));
});

gulp.task('transpileStyleSass', () => {
    return gulp.src(config.styleScssIn)
    .pipe(sass())
    .pipe(gulp.dest(config.styleScssOut));
});

const webpackTask = () => {
    const webpackHandler = () => browserSync.reload();

    return gulp.src(config.jsIn)
               .pipe(named())
               .pipe(webpackStream(webpackConfig, webpack, webpackHandler))
               .pipe(gulp.dest(config.jsOut))
               .on('data', () => { 
                    gulp.watch(config.scssIn, {interval: 1000}, gulp.series('transpileStyleSass','transpileSass', reload))
                    gulp.watch('./**/*.php', {interval: 1000}, gulp.series(reload))
                });
};

gulp.task('dev', gulp.series('transpileStyleSass','transpileSass', webpackTask));
gulp.task('default', gulp.series('dev'));
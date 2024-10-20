const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const gulp = require('gulp');

const {css} = require('../config.js')

function compileCss(){
  return gulp.src(css.src)
    .pipe(cleanCSS({compatibility: '*'}))
    .pipe(concat('all.min.css'))
    .pipe(gulp.dest(css.dest));
}

exports.compileCss = compileCss;
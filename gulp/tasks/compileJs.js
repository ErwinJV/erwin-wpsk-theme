const { src, dest } = require('gulp');
const uglify = require('gulp-uglify');

const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const {js} = require('../config.js')

function compileJs() {
    return src(js.src)
      .pipe(sourcemaps.init())
      .pipe(concat('all.min.js'))
      .pipe(uglify())
      .pipe(sourcemaps.write())
      .pipe(dest(js.dest))
      
      
  }

  exports.compileJs = compileJs;
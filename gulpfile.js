const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const minifyCSS = require('gulp-minify-css');
const autoprefixer = require('gulp-autoprefixer');
const minify = require("gulp-minify");
const del = require("del");

/* build production */
gulp.task('prod', function (cb) {
  clearDist();
  style()
  fonts()
  scripts()
  cb();
})

function style() {
  const number = getRandomInRange(1000, 1000000);
  return gulp.src(
    [
      'modules/**/*.scss',
      'js/**/*.css',
      'css/**/*',
    ]
  )
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCSS())
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
    .pipe(concat(`style${number}.min.css`))
    .pipe(gulp.dest('dist/css'));
}

function fonts() {
  return gulp.src('assets/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))
}

function scripts() {
  const number = getRandomInRange(1000, 1000000);
  return gulp.src(
    [
      'modules/**/*.js',
      'js/partials/**/*.js'
    ]
  )
    .pipe(concat(`build${number}.js`))
    .pipe(minify({noSource: true}))
    .pipe(gulp.dest('dist/js'))
}

/* build develop */
gulp.task('dev', function () {
  clearDist()
  watchStyles();
  fonts();
  watchScripts()
  gulp.watch([
    'modules/**/*.scss',
    'js/**/*.css',
    'css/**/*',
  ], watchStyles);
  gulp.watch([
    'modules/**/*.scss',
    'css/partials/**/*',
  ], fonts);
  gulp.watch([
    'modules/**/*.js',
    'js/partials/**/*.js'
  ], watchScripts);
})

function watchStyles() {
  return gulp.src(
    [
      'modules/**/*.scss',
      'js/**/*.css',
      'css/**/*',
    ]
  )
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));
}

function watchScripts() {
  return gulp.src(
    [
      'modules/**/*.js',
      'js/partials/**/*.js'
    ]
  )
    .pipe(concat('build.js'))
    .pipe(gulp.dest('dist/js'))
}

function clearDist() {
  del.sync(['dist/**']);
}

function getRandomInRange(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
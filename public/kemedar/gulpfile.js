const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const browsersync = require('browser-sync').create();
const livereload = require('gulp-livereload');


//scss to css
gulp.task('style', () => {
  return gulp
    .src('assets/scss/**/*.scss', { allowEmpty: true })
    .pipe(sass({
        outputStyle: 'compressed'
      }).on('error', sass.logError))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('assets/css', { sourcemaps: '.' }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browsersync.stream())
    .pipe(livereload());
  done();
});



// Watch function
gulp.task('browser-sync', async function (done) {
  browsersync.init({
    base: './',
    server: './',
    startPath: 'main/layout-1.html',
    host: 'localhost',
    open: true,
    tunnel: false,
  });

  done();
});
gulp.task(
  'default',
  gulp.series('style', 'browser-sync', function () {
    gulp.watch(['assets/scss/**/*.scss'], gulp.series('style'));
    gulp.watch('./*.html').on('change', livereload );
    gulp.watch('assets/css/*.css').on('change', livereload );
    livereload.listen();
  }),
);
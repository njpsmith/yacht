var gulp = require( 'gulp' ),
  //livereload = require( 'gulp-livereload' ),
  minifycss = require( 'gulp-minify-css' ),
  rename = require( 'gulp-rename' ),
  sass = require( 'gulp-sass' ),
  notify = require( 'gulp-notify' ),
  sourcemaps = require('gulp-sourcemaps'),
  connect = require('gulp-connect');

var browserSync = require('browser-sync').create();
var reload = browserSync.reload;


gulp.task('default', ['scss', 'watch', 'connect']);



gulp.task( 'scss', function() {
  return gulp.src( './library/scss/style.scss' )
    //.pipe( sourcemaps.init())
    .pipe( sass() )
    .on('error', notify.onError(function (error) {
       return 'An error occurred while compiling sass.\nLook in the console for details.\n' + error;
    }))
    .pipe( gulp.dest( './library/css/' ) )
    //.pipe( sourcemaps.write())
    .pipe( minifycss() )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( gulp.dest( './library/css/' ) )
    //.pipe( livereload() )
    .pipe( notify({ message: 'Styles task complete' }) )
    .pipe(connect.reload());
});


// Gulp connect
gulp.task('connect', function() {
    connect.server({
        livereload: true
    });
});



// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('./library/scss/**/*.scss', ['scss']);
});



var onError = function( err ) {
  console.log( 'An error occurred:', err.message );
  this.emit( 'end' );
}
// npm install -g gulp
// executar esse comando apos instalar o gulp globalmente
// npm install --save-dev gulp gulp-ruby-sass gulp-autoprefixer gulp-notify gulp-bower gulp-uglify gulp-concat merge-stream

'use strict';

var gulp       = require('gulp'), 
    //plumber    = require('gulp-plumber'),
    sass       = require('gulp-ruby-sass'),
    notify     = require('gulp-notify') ,
    autoprefix = require('gulp-autoprefixer') ,
    sourcemaps = require('gulp-sourcemaps'),
    uglify     = require('gulp-uglify'),
    concat     = require('gulp-concat'),
    merge      = require('merge-stream'),
    jshint     = require('gulp-jshint');

    // minifyHTML = require('gulp-minify-html')
    //webserver  = require('gulp-webserver')
    //connect    = require('gulp-connect-multi')()
    //stylus     = require('gulp-stylus')
    //bower      = require('gulp-bower')

var config = {
  sassPath: './app/sass',
  bowerDir: './bower_components'
}

// Dist folder path
var distFolder = 'dist';

// gulp.task('servidor', connect.server({
//   root: ['equiparlab'],
//   port: 1338,
//   livereload: true,
//   open: {
//     browser: 'firefox' //chrome, firefox, safari
//   }
// }));

// gulp.task('html', function () {
//     gulp.src('*.php')
//     .pipe(connect.reload());
// });

// gulp.task('html', function () {
//     return gulp.src('*.php')
//         .pipe(minifyHTML({empty: true}))
//         .pipe(gulp.dest(distFolder));
// });

// gulp.task('bower', function () {
//   return bower()
//   .pipe(gulp.dest(config.bowerDir))
// });

// task para a library de icones fontawesome
gulp.task('icons', function () {
  return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*')
  .pipe(gulp.dest('./assets/fonts'));
});

// task para a library de icones do bootstrap
gulp.task('glyphicons', function () {
  return gulp.src(config.bowerDir + '/bootstrap-sass-official/assets/fonts/bootstrap/**.*')
  .pipe(gulp.dest('./assets/fonts/bootstrap'));
});

// task para compilar SASS files e salvar CSS em ./assets
gulp.task('sass-app', function () {
  return gulp.src(config.sassPath + '/style.scss')
  .pipe(sass({
    //container: 'gulp-ruby-sass-app',
    //sourcemap: true,
    style: 'compressed',
    loadPath: [

        config.sassPath,
        config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
        config.bowerDir + '/jasny-bootstrap/scss',
        config.bowerDir + '/fontawesome/scss'
        //config.bowerDir + '/slick.js/slick/slick.scss',
        //config.bowerDir + '/Hover/scss',
    ]
  })

  // .on('error', function (err) {
  //   console.error('Error', err.message);
  // })

  .on("error", notify.onError(function (error){
    return "Error: " + error.message;
  })))

  // .pipe(plumber({
  //   errorHandler: function (error) {
  //     console.log(error.message);
  //     this.emit('end');
  //   }}))

  //.pipe(autoprefix(['last 2 version']))
  .pipe(gulp.dest('./assets/css'))
  //.pipe(connect.reload())
  .pipe(notify('CSS OK!'));

});

// task para compilar STYLUS files e salvar CSS em .assets

// gulp.task('stylus', function() {
//   gulp.src('./resources/stylus/**/*.styl')
//   .pipe(stylus())
//   .pipe(gulp.dest('./assets/stylus'))
//   .pipe(notify('CSS OK!'));
// });

// task para compilar SASS files e salvar CSS em ./assets

// gulp.task('css', function() {
//   return gulp.src(config.sassPath + '/style.scss')
//   .pipe(sass({
//     style: 'normal', normal, compressed
//     loadPath: [
//     './resources/sass',
//     config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
//     config.bowerDir + '/fontawesome/scss',
//     config.bowerDir + '/Hover/scss',
//     ]
//   })
//   .on("error", notify.onError(function (error) {
//     return "Error: " + error.message;
//   })))
//   .pipe(autoprefix('last 2 version'))
//   .pipe(gulp.dest('./assets/css'));
// });

// task para compilar JS e salvar JS minificado em .assets
gulp.task('js', function () {
  return gulp.src([

    config.bowerDir + '/jquery/dist/**.min.js',
    //config.bowerDir + '/bootstrap-sass-official/assets/javascripts/bootstrap.js',
    config.bowerDir + '/jquery.lazyload/jquery.lazyload.js',
    config.bowerDir + '/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
    //config.bowerDir + '/slick.js/slick/slick.js',
    config.bowerDir + '/lightbox2/dist/js/lightbox.min.js',
    './assets/js/app.js',
    ])
  //return gulp.src(config.bowerDir + '/bootstrap-sass-official/assets/javascripts/bootstrap.js')
  //.pipe(jshint())
  //.pipe(jshint.reporter('jshint-stylish'))
  .pipe(uglify())
  .pipe(concat('scripts.js'))
  .pipe(gulp.dest('./assets/js'));

  // var bootstrap = gulp.src(config.bowerDir + '/bootstrap-sass-official/assets/javascripts/bootstrap.js')
  //   .pipe(gulp.dest('./public/js'));
  // var jquery = gulp.src(config.bowerDir + '/jquery/dist/**.min.js')
  //   .pipe(gulp.dest('./public/js'));
  // return merge(bootstrap,jquery);

  // return gulp.src(config.bowerDir + '/jquery/dist/**.min.js')
  // return gulp.src(config.bowerDir + '/bootstrap-sass-official/javascripts/*.js')
  // .pipe(uglify())
  // .pipe(concat('main.js'))
  // .pipe(gulp.dest('./public/js'));
});

// task para informar erro de syntax no js
gulp.task('jshint', function() {
  return gulp.src('./assets/js/app.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

// task para otimização de imagens e salvar em .assets

// gulp.task('images', function() {
//   gulp.src('images/**/*')
//   .pipe(imagemin({optimizationLevel:3, progressive:true, interlaced:true}))
//   .pipe(gulp.dest('./assets/images'))
// });

// task webserver

// gulp.task('webserver', function() {
//   gulp.src('app')
//   .pipe(webserver({
//     livereload: true,
//     directoryListing: true,
//     open: true,
//     fallback: 'index.html'
//   }));
// });

// task watch para compilar em tempo real arquivos SASS para CSS
// task watch para verificar em tempo real se ha erro no app.js
gulp.task('watch', function () {
  gulp.watch(config.sassPath + '/*.scss', ['sass-app'])
  gulp.watch('./assets/js/app.js', ['jshint', 'js']);
});

// task default
//gulp.task('default', ['bower', 'glyphicons', 'sass-app', 'js']);
//gulp.task('default', ['bower', 'icons', 'glyphicons', 'sass-app', 'js']);
gulp.task('default', ['icons', 'glyphicons', 'sass-app', 'js']);

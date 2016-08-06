/**
 * Created by Olaf Broms on 7/6/2016.
 */

var gulp         = require('gulp'),
    util        = require('gulp-util'),
    // plumber      = require('gulp-plumber'),
    // sourcemaps   = require('gulp-sourcemaps'),
    sass = require("gulp-sass"),//https://www.npmjs.org/package/gulp-sass
    autoprefixer = require('gulp-autoprefixer'),//https://www.npmjs.org/package/gulp-autoprefixer
    minifycss = require('gulp-minify-css'),//https://www.npmjs.org/package/gulp-minify-css
    rename = require('gulp-rename'),//https://www.npmjs.org/package/gulp-rename

    uglify = require('gulp-uglify'),
    pump = require('pump');
    concatCss = require('gulp-concat-css');
    log = util.log,

    browserSync  = require('browser-sync'),
    reload       = browserSync.reload;




gulp.task('browser-sync', ['sass'],  function() {
    browserSync({

        files: [ // Directories of the files, HTML/TXT/JS... etc
            '*.php',
            'views/*.php',
            'submit-forms/*.php',
            'javascript/*.js',
            'javascript/javascript-production/*.js',
            'styles/*.scss',
            'style/styles-production/*.css'
        ],
        open: 'external',
        host: 'teamwork',  //your localhost
        proxy: 'teamwork', //your localhost again
        port: '3000'


        // proxy: {
        //     target: "members/" // Enter your dev environment proxy
        // }
    });


    gulp.watch('styles/*.scss', ['sass']); // Watches the sass function
   gulp.watch('javascript/*.js', ['compress']); // Watches the javascript uglification function
   // gulp.watch('styles/styles-production/*.css', ['miniCss']); // Watches the secondary CSS files
    gulp.watch('*.php').on('change', reload);//watch main php files
    gulp.watch('views/*.php').on('change', reload);//watch views php files
    gulp.watch('submit-forms/*.php').on('change', reload);//watch submit-forms php files
    gulp.watch('styles/styles-production/*.css').on('change', reload); //watch css and reload browser
    gulp.watch('javascript/javascript-production/*.js').on('change', reload); //reload on javascript uglification

});

//this is the new task....target properly
gulp.task('sass', function () {
    gulp.src('styles/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifycss())
        .pipe(gulp.dest('styles/styles-production/'))
        .on('end', function(){ util.log('Sass is now Compiled!!!!'); });

});


gulp.task('compress', function (cb) {
    pump([
            gulp.src('javascript/*.js'),
            uglify(),
            gulp.dest('javascript/javascript-production')
                .on('end', function(){ util.log('Javascript is Uglified !!!!'); })
        ],
        cb
    );
});

gulp.task('default', ['browser-sync']);
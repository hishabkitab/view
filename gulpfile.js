'use strict';

const gc = require('gulp-copy');
const {src, dest, series, watch, parallel} = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const bs = require('browser-sync').create();
const npmDist = require('gulp-npm-dist');
const htmlInjector = require('bs-html-injector');
const imagemin = require('gulp-imagemin');

sass.compiler = require('node-sass');


// Start a server
function serve() {
    bs.use(htmlInjector, {
        files: "./public/**/*.html"
    });

    // Now init the Browsersync server
    bs.init({
        injectChanges: true,
        server: {
            baseDir:"public",
            index:"index.html"
        }
    });

    // Listen to change events on HTML and reload
    watch('./public/**/*.html').on('change', htmlInjector);

    // Provide a callback to capture ALL events to CSS
    // files - then filter for 'change' and reload all
    // css files on the page.
    watch('./resources/scss/**/*.scss', series(compileStyle, minifyStyle));

    watch('./resources/scss/skins/**/*.scss', compileSkinStyle);
    watch('./resources/scss/pages/*.scss', compilePageStyle);

    watch(
        ['./resources/scss/_variables.scss', './resources/scss/bootstrap/_variables.scss'],
        series(compileStyle, compilePageStyle)
    );

}

// Compile scss files to style.css file
function compileStyle() {
    return src('./resources/scss/dashforge.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./../../public/css/'))
        .pipe(bs.stream());
}

// Compile and minify scss files to style.css file
function minifyStyle() {
    return src('./resources/scss/dashforge.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(dest('./../../public/css/'))
        .pipe(bs.stream());
}

// Compile skins styles to css folder
function compileSkinStyle() {
    return src('./resources/scss/skins/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./../../public/css/skins/'))
        .pipe(bs.stream());
}

// Compile pages styles to css folder
function compilePageStyle() {
    return src('./resources/scss/pages/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./../../public/css/pages/'))
        .pipe(bs.stream());
}

// Copy dependencies to public/vendor
function npmDep() {
    return src(npmDist(), {base: './node_modules/'})
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(dest('./../../public/vendor/'));
}

//copy  fonts
function copyFonts() {
    return src(['./resources/fonts/**/*'])
        .pipe(dest('./../../public/fonts/'));
}

//copy images
function copyImages() {
    return src(['./resources/images/**/*'])
        .pipe(dest('./public/images/'));
}

//copy images
function copyData() {
    return src(['./resources/data/**/*'])
        .pipe(dest('./../../public/data/'));
}

//copy images
function copyJS() {
    return src(['./resources/js/**/*'])
        .pipe(dest('./../../public/js/'));
}

function moveContent()
{
    return src(['./resources/images/**/*'])
        .pipe(dest('./../../public/img/'));
}

//module exports
exports.minifyStyle = minifyStyle;
exports.compileSkinStyle = compileSkinStyle;
exports.compilePageStyle = compilePageStyle;
exports.serve = serve;
exports.npmDep = npmDep;

exports.compileStyle = parallel(compileStyle, minifyStyle);
exports.compileSkin = parallel(compileSkinStyle, compilePageStyle);
exports.releaseContent = parallel(copyImages,copyData,copyFonts,copyJS);
exports.refresh = series(npmDep, copyImages, copyData, copyFonts, copyJS,
    compileStyle, minifyStyle, compileSkinStyle,compilePageStyle, serve);
exports.production = moveContent;

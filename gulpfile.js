var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    changed = require('gulp-changed'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),
    npmDist = require('gulp-npm-dist'),
    uglify = require('gulp-uglify')
;

// --------------------------------------------------
// Copy resource media files to public folders
// --------------------------------------------------

function copyFiles() {
    return gulp.src('./resources/media/**/*')
        .pipe(gulp.dest('../../public/'));
}

// --------------------------------------------------
// Compile website sass styles
// --------------------------------------------------

function compileSass() {
    return gulp.src([
        './resources/scss/admin.scss',
        './resources/scss/client.scss',
        './resources/scss/docs.scss',
        './resources/scss/site.scss'
    ])
        .pipe(changed('../../public/css/'))
        .pipe(sass({outputStyle: 'expanded'}))
        .on('error', sass.logError)
        .pipe(autoprefixer([
            "last 1 major version",
            ">= 1%",
            "Chrome >= 45",
            "Firefox >= 38",
            "Edge >= 12",
            "Explorer >= 10",
            "iOS >= 9",
            "Safari >= 9",
            "Android >= 4.4",
            "Opera >= 30"], {cascade: true}))
        .pipe(gulp.dest('../../public/css/'));
}

// --------------------------------------------------
// CSS minifier - minifies the below given lists
// --------------------------------------------------

function minifyCSS() {
    return gulp.src([
        '../../public/css/*.css',
    ])
        .pipe(cssnano())
        .pipe(gulp.dest('../../public/css/'));
}

// --------------------------------------------------
// Compile JS from resource folder
// --------------------------------------------------

function compileJS() {
    return gulp.src('./resources/js/**/*')
        .pipe(gulp.dest('../../public/js/'))
}

// --------------------------------------------------
// JS Uglifier - uglify the below given lists
// --------------------------------------------------

function uglifyJS() {
    return gulp.src([
        './public/js/*.js',
    ])
        .pipe(uglify())
        .pipe(gulp.dest('../../public/js/'));
}

// --------------------------------------------------
// Copy NPM Libraries to public/vendor folder
// --------------------------------------------------

function publishLib() {
    return gulp.src(npmDist(), {base: './node_modules/'})
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(gulp.dest('../../public/vendor'));
}

// --------------------------------------------------
// Exports objects for gulp public functions
// --------------------------------------------------

exports.sass = gulp.series(
    copyFiles,
    compileSass
);

exports.javascript = gulp.series(
    compileJS,
    uglifyJS
);

exports.production = gulp.series(
    copyFiles,
    publishLib,
    compileSass,
    compileJS,
    gulp.parallel(
        minifyCSS,
        uglifyJS
    )
);

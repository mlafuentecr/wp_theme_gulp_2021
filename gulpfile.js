// Defining requirements
const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer'); // prefixes like -webkit and -moz
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const del = require('del');
const imagemin = require('gulp-imagemin');

sass.compiler = require('node-sass');

////////// BUNDLES CSS  /////////////////
function homepageScss() {
	return (
		src(['./src/sass/homepage.scss'])
			.pipe(sass().on('error', sass.logError))
			.pipe(sourcemaps.init())
			.pipe(cleanCSS())
			.pipe(prefix())
			.pipe(concat('homepage.css'))
			.pipe(sourcemaps.write('.'))
			.pipe(
				rename({
					suffix: '.min',
				})
			)
			.pipe(dest('./dist/css/'))
	);
}

function internalScss() {
	return (
		src(['./src/sass/internal.scss'])
			.pipe(sass().on('error', sass.logError))
			.pipe(prefix())
			.pipe(cleanCSS())
			.pipe(sourcemaps.init())
			.pipe(concat('internal.css'))
			.pipe(sourcemaps.write('.'))
			.pipe(
				rename({
					suffix: '.min',
				})
			)
			.pipe(dest('./dist/css/'))
	);
}
function cleanAllCss() {
	//Delte these files bc these files are going to be merege with layout later
	return del(['./dist/css/*.*']);
}


////////// BUNDLES JS  /////////////////
function jsintern() {
	return src(['./src/js/internal.js', './src/js/iframe.js', './src/js/backEndLogins.js', './src/js/blocks.js', './src/js/bootstrap.bundle.min.js'])
		.pipe(babel())
		.pipe(uglify())
		.pipe(concat('bundle_intern.js'))
		.pipe(dest('./dist/js/'));
}

function jshome() {
	return src(['./src/js/pwa.js', './src/js/iframe.js',  './src/js/backEndLogins.js', './src/js/slide.js', './src/js/blocks.js', './src/js/bootstrap.bundle.min.js'])
		.pipe(babel())
		.pipe(uglify())
		.pipe(concat('bundle_home.js'))
		.pipe(dest('./dist/js/'));
}



function copyBundleCss() {
	return src('./dist/css/*.*').pipe(dest('./src/css/'));
}
function copyBundleJs() {
	return src('./dist/js/*.*').pipe(dest('./src/js/'));
}
function copyadmincss() {
	return src('./src/css/admin/*.css').pipe(dest('./dist/css/admin/'));
}


function watchtask() {
	
	watch('./src/sass/*.scss', internalScss);
	watch('./src/sass/*.scss', homepageScss);

	watch('./src/js/*.js', jsintern);
	watch('./src/js/*.js', jshome);


	watch('./dist/css/*.css', copyBundleCss);

	// watch('./src/images/*.{jpg,png}', optimizeimg);
	// watch('./src/images/*.{jpg,png}', webpImage);
}

exports.default = series(cleanAllCss,   parallel(jshome, jsintern, series(homepageScss, internalScss, copyBundleCss, copyadmincss, watchtask)));

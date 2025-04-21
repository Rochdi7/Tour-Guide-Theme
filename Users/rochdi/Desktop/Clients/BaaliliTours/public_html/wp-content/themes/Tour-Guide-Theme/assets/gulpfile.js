
// $ npm install gulp --save-dev
// $ npm install gulp-compass --save-dev
// $ npm install gulp-concat --save-dev
// $ npm install gulp-uglify --save-dev
// $ npm install gulp-imagemin --save-dev

var gulp = require('gulp');
//var compass = require('gulp-compass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
// var imagemin = require('gulp-imagemin');
// var pngcrush = require('imagemin-pngcrush');
/****************************************************************
*******    FICHIES JAVASCIPTS A CONCATENER ET MINIFIER **********
****************************************************************/

// JS final
var javascript_file =  "script.min.js";

var SCSS_DIR_FILES		='./sass/*.scss';
var CSS_FINAL_DIR 		='./css/';

var JS_FINAL_DIR	='./js/';
var SJS_DIR		='./js/';


var javascript_files=[
	SJS_DIR+'jquery-2.1.0.min.js',
	SJS_DIR+'bootstrap.min.js',
	SJS_DIR+'jquery.form.js',
	SJS_DIR+'script.js',
];



gulp.task('jsminify', function() {
  return gulp.src(javascript_files)
  	.pipe(concat(javascript_file))
  	.pipe(uglify())
  	.pipe(gulp.dest(JS_FINAL_DIR));
});




gulp.task('default',['compass','jsminify'], function() {

});


gulp.task('watch', function() {
	gulp.watch(SCSS_DIR_FILES,['compass']);
	gulp.watch(SJS_DIR+'*.js',['jsminify']);
});
//Plugins
var gulp = require("gulp");
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");
var babel = require("gulp-babel");
var autoprefixer = require("gulp-autoprefixer");
var minimfyCss = require("gulp-minify-css");
var sourcemaps = require("gulp-sourcemaps");
var imagemin = require("gulp-imagemin");

//Paths
var CSS_PATH = "src/css/customcss/**/*.css";
var SCRIPTS_PATH = "src/js/customjs/**/*.js";

//Styles
gulp.task("styles", function () {
  console.log("starting styles task");
  //custom styles
  return gulp
    .src(CSS_PATH)
    .pipe(sourcemaps.init())
    .pipe(autoprefixer())
    .pipe(concat("styles.css"))
    .pipe(minimfyCss())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("dis"));
});

//Scripts
gulp.task("scripts", function () {
  console.log("starting scripts task");
  return gulp
    .src(SCRIPTS_PATH)
    .pipe(sourcemaps.init())
    .pipe(
      babel({
        presets: ["babel-preset-env"]
      })
    )
    .pipe(uglify())
    .pipe(concat("main.js"))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("dis"));
});

//Images
gulp.task("images", function () {
  console.log("starting images task");
  gulp.src("src/img/*")
    .pipe(imagemin([
      imagemin.jpegtran({
        progressive: true
      })
    ]))
    .pipe(gulp.dest('dis/img'));
});

//Default
gulp.task('default', gulp.series(gulp.parallel("styles", "scripts", "images")), function () {
  console.log("Working default");
});
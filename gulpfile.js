const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");
const browserSync = require("browser-sync");
const cleanCss = require("gulp-clean-css"); //cssの圧縮
const uglify = require("gulp-uglify"); //jsの圧縮
const rename = require("gulp-rename");
const htmlBeautify = require("gulp-html-beautify"); //htmlの整形

//sassのコンパイル
function compileSass() {
  return gulp.src("./src/assets/css/**/*.scss")
  .pipe(sass())
  .pipe(postcss([autoprefixer(), cssSorter()]))
  .pipe(mmq())
  .pipe(gulp.dest("./src/assets/css/"))
  .pipe(cleanCss())
  .pipe(rename({
    suffix: ".min"
  }))
  .pipe(gulp.dest("./src/assets/css/"))
}


function watch(){
  gulp.watch("./src/assets/css/**/*.scss", gulp.series(compileSass, browserReload));//左から順に読み込まれる
  gulp.watch("./src/assets/js/**/*.js", gulp.series(minJS, browserReload));
  gulp.watch("./src/assets/img/**/*", gulp.series(copyImage, browserReload));
  gulp.watch("../**/*.php", browserReload);
}

function browserInit(done) {
  browserSync.init({
    proxy:"http://portfolio.local/"
  });
  done();
}

function browserReload(done) {
  browserSync.reload();
  done();
}

//jsコンパイル
function minJS() {
  return gulp.src("./src/assets/js/**/*.js")
  .pipe(gulp.dest("./src/assets/js"))
  .pipe(uglify())
  .pipe(rename({
    suffix: ".min"
  }))
  .pipe(gulp.dest("./src/assets/js"))
}

//HTMLの整形
function formatHTML(done) {
  return gulp.src("./src/**/*.html")
  .pipe(htmlBeautify({
    indent_size: 2,
    indent_with_tabs: true,
  }))
  .pipe(gulp.dest("./public/"))
  done();
}

function copyImage() {
  return gulp.src("./src/assets/img/**/*")
  .pipe(gulp.dest("./src/assets/img/"))
}

exports.compileSass = compileSass;
exports.watch = watch;
exports.browserInit = browserInit;
exports.build = gulp.parallel(formatHTML, browserInit, watch);
exports.minJS = minJS;
exports.formatHTML = formatHTML;
exports.dev = gulp.parallel(formatHTML, minJS, compileSass, copyImage)
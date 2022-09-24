// Gulp 4 ----------------------------------------------------------------- //
// Gijs van der Borg
// Last edited: 4-11-2021
// ------------------------------------------------------------------------ //

"use strict";

// Defining requirements
const gulp = require("gulp");
const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const cssnano = require("gulp-cssnano");
const cleanCSS = require("gulp-clean-css");
const concat = require("gulp-concat");
const gulpStylelint = require("gulp-stylelint");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const browsersync = require("browser-sync").create();
const autoprefixer = require("gulp-autoprefixer");
const svgmin = require("gulp-svgmin");
var lintFormat = require("./.styleintrc.json");

// Package.JSON contents
// const pkg = JSON.parse(fs.readFileSync("./package.json"));

// CSS -------------------------------------------------------------------- //
const stylesTasks = gulp.series(compileSass, minifyCss);

// Compile SCSS into CSS
function compileSass() {  
  return src("./sass/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(dest("./css"));
}

// Minify the theme.css file
function minifyCss() {
  return src("./css/theme.css")
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(postcss([require("tailwindcss"), require("autoprefixer")]))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("./css/"));
}

// Run the stylelint, check SCSS for styling errors
function stylelint() {
  return gulp.src("sass/**/*.scss").pipe(
    gulpStylelint({
      config: lintFormat,
      reporters: [
        {
          formatter: "string",
          console: true,
        },
      ],
      failAfterError: true,
    })
  );
}

function tailwindCss() {
  var tailwindcss = require("tailwindcss");

  return gulp
    .src("assets/css/tailwind.css")
    .pipe(postcss([tailwindcss("tailwind.config.js"), require("autoprefixer")]))
    .pipe(gulp.dest("./css/"));
}

// Fix the SCSS code according to stylelint rules
function fixScss() {
  return gulp
    .src("sass/**/*.scss")
    .pipe(
      gulpStylelint({
        fix: true,
        config: lintFormat,
        reporters: [
          {
            formatter: "string",
            console: true,
          },
        ],
        failAfterError: true,
      })
    )
    .pipe(gulp.dest("sass"));
}

// Run all the styling tasks
function styles(done) {
  stylesTasks();
  done();
}

// Watcher for SCSS updates
function watchSass() {
  watch("./sass/*.scss", compileSass);
}

// Minify SVGs
function minifySVG() {
  return gulp
    .src("../../media/svg/uncompressed/*.svg")
    .pipe(svgmin())
    .pipe(gulp.dest("../../media/svg/compressed"));
}

// Javascript ------------------------------------------------------------- //
// Minify javascript using terser
function scripts() {
  return gulp
    .src([
      "./js/elements/menu.js",
      "./js/elements/dynamic-load.js",
      "./js/elements/homeheader.js",
      "./js/elements/scroll.js",
      "./js/elements/mobilehover.js",
      "./js/elements/customcursor.js",
      "./js/elements/form.js",
      "./js/elements/project.js",
      "./js/elements/projects.js",
      "./js/elements/project-styles.js",
      "./js/elements/project-styles/double-phone.js",
      "./js/elements/project-styles/desktop-windows.js",
    ])
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("./js"));
}

// Browsersync ------------------------------------------------------------ //
// Initiate the browsersync
function browsersyncServe(done) {
  browsersync.init({
    proxy: "http://localhost:8888/gijsworks/",
    files: ["./css/*.min.css", "./js/*.min.js", "./**/*.php"],
    injectChanges: true,
  });
  done();
}

// Browsersync reload task
function browsersyncReload(done) {
  browsersync.reload();
  done();
}

// Watch Task
function watchTask() {
  watch("./**/*.php", series(styles, browsersyncReload));
  watch("./sass/**/*.scss", series(styles, browsersyncReload));
  watch(
    ["./js/elements/*.js", "./js/elements/project-styles/*.js", "./js/main.js"],
    series(scripts, browsersyncReload)
  );
}

// Default Gulp Task
exports.default = series(styles, scripts, browsersyncServe, watchTask);

// Gulp commands ---------------------------------------------------------- //
exports.compileSass = compileSass;
exports.minifyCss = minifyCss;
exports.styles = styles;
exports.scripts = scripts;
exports.watchTask = watchTask;
exports.stylelint = stylelint;
exports.fixScss = fixScss;
exports.minifySVG = minifySVG;
exports.tailwindCss = tailwindCss;

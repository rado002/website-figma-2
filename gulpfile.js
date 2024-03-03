const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass");

const browserSync = require("browser-sync").create();

const paths = {
  scss: {
    src: "./scss/**/*.scss",
    dest: "./dist/css",
  },

  img: {
    src: "./img/**/*.*",
    dest: "./dist/img",
  },
};

function htmlTask() {
  return src(paths.html.src)
    .pipe(dest(paths.html.dest))
    .pipe(browserSync.stream());
}

function imgTask() {
  return src(paths.img.src).pipe(imagemin()).pipe(dest(paths.img.dest));
  // .pipe(browserSync.stream());
}

function watchTask() {
  browserSync.init({
    server: {
      baseDir: "./dist",
    },
  });

  watch(paths.html.src, htmlTask).on("change", browserSync.reload);
  watch(paths.img.src, imgTask);
  wathch(paths.scss.src, scssTask);
  watch(paths.js.src, jsTask);
}

exports.default = series(scssTask, jsTask, imgTask, htmlTask, watchTask);

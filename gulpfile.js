"use strict";

var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task("sass", function () {
  gulp.src("./scss/*.scss").pipe(sass({style : "expanded"})).pipe(gulp.dest('./'));
});
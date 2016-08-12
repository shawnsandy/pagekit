var glob = require("glob");
var gulp = require("gulp");
var gulpicon = require("gulpicon/tasks/gulpicon");

// grab the config, tack on the output destination
var config = require("./config-icons.js");
config.dest = "src/public/icons";

// grab the file paths
var files = glob.sync(["packages/typicons.font/src/svg/*.svg", "packages/typicons.font/src/svg/*.svg"]);

// set up the gulp task
gulp.task("icons", gulpicon(files, config));

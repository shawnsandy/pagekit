var gulp = require('gulp');
var q = require('q');
var path = require('path');
var fs = require('fs');
var Grunticon = require('grunticon-lib');
var _ = require('underscore');

gulp.task('icons:entypo', function () {
    icons('svgs/entypo_385_icons/SVG/', 'entypo');
});

gulp.task('icons:material', function () {
    icons('svgs/material_845_icons/SVG/', 'material');
});

const icons = function (iconsDir, outputDir) {
    var deferred = q.defer(),
        iconDir = iconsDir;

    options = {enhanceSVG: true};

    var files = fs.readdirSync(iconDir).map(function (fileName) {
        return path.join(iconDir, fileName);
    });

    var grunticon = new Grunticon(files, 'src/public/icons/' + outputDir, options);

    grunticon.process(function () {
        deferred.resolve();
    });
    return deferred.promise;

};

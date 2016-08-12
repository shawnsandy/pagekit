var gulp      = require('gulp');
var q         = require('q');
var path      = require('path');
var fs        = require('fs');
var Grunticon = require('grunticon-lib');

gulp.task('icons', function () {
  var deferred = q.defer(),
      iconDir = 'svgs/entypo_385_icons/SVG/',
      options = { enhanceSVG: true };

  var files = fs.readdirSync(iconDir).map(function (fileName) {
    return path.join(iconDir, fileName);
  });

  var grunticon = new Grunticon(files, 'src/public/icons', options);

  grunticon.process(function () {
    deferred.resolve();
  });

  return deferred.promise;
});

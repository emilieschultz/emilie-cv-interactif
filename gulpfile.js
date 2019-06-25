var gulp        = require('gulp');
var sass        = require('gulp-sass');

gulp.task('watch', ['sass'], function() {
    gulp.watch("css/**/*.scss", ['sass']);
});
// Static Server + watching scss/html files

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("css/scss/style.scss")
        .pipe(sass())
        .pipe(gulp.dest("css"))
});


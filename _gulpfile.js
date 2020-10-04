// gulpの読み込み
const gulp = require('gulp');
// sassをコンパイルするプラグインを読み込み
const sass = require("gulp-sass");
const Fibers = require("fibers");
// sass.compiler = require("sass") // dart-sassを指定

const autoprefixer = require("gulp-autoprefixer");
const notify = require("gulp-notify");
const cleancss = require("gulp-clean-css");
const plumber = require("gulp-plumber");
const browser = require("browser-sync");
const sourcemaps = require("gulp-sourcemaps");

const path = {
    src: {
        sass: "/src/sass/**/",
    },
    dist: {
        css: "/dist/css/"
    }
}

// sassをコンパイルするタスクの作成
gulp.task("sass", () => {
    return (
        gulp
            .src("/src/sass/**/**.scss")
            // .src(path.src.sass)
            .pipe(plumber(notify.onError('Error:<%= error.message %>')))
            .pipe(sass({
                // fiber: Fibers,
                outputStyle: "expanded",
            }))
            .pipe(autoprefixer())
            .pipe(cleancss())
            .pipe(gulp.dest("dist/css/"))
            .pipe(browser.reload({stream:true}))
            .pipe(notify("Sassをコンパイルしました!"))
    );
});


gulp.task("browser", () => {
    browser.init({
        proxy: "/lifelib.net"
    })
})


// ファイルを監視する
gulp.task("watch", () => {
    gulp.watch("src/sass/**.scss", gulp.task(["sass"]));
});

// タスクの実行
gulp.task("default", gulp.series(
    gulp.parallel("sass")
));
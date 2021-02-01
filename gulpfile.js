"use strict";

// gulpの読み込み
const gulp = require("gulp");
// sassをコンパイルするプラグインを読み込み
const sass = require("gulp-dart-sass");
const Fibers = require("fibers");

const autoprefixer = require("gulp-autoprefixer");
const notify = require("gulp-notify");
const cleancss = require("gulp-clean-css");
const plumber = require("gulp-plumber");
const browser = require("browser-sync");
const sourcemaps = require("gulp-sourcemaps");

// const path = {
//     src: {
//         sass: "/src/sass/main.scss",
//     },
//     dist: {
//         css: "/dist/css/"
//     }
// }

// sassをコンパイルするタスクの作成
gulp.task("sass", done => {
    return (
        gulp
            .src('src/sass/main.scss')
            .pipe(plumber(notify.onError('Error:<%= error.message %>')))
            .pipe(sourcemaps.init())
            .pipe(sass({
                fiber: Fibers,
                outputStyle: "expanded"
            }))
            .pipe(autoprefixer())
            .pipe(cleancss())
            .pipe(gulp.dest("dist/css/"))
            .pipe(sourcemaps.write())
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
    gulp.watch("src/sass/**/*.scss", gulp.task(["sass"]));
});

// タスクの実行
gulp.task("default", gulp.series(
    gulp.parallel("browser", "watch")
));
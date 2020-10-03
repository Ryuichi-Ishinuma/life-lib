// gulpの読み込み
const gulp = require("gulp");
// sassをコンパイルするプラグインを読み込み
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const notify = require("gulp-notify");
const cleancss = require("gulp-clean-css");
const plumber = require("gulp-plumber");
const browser = require("browser-sync");

// sassをコンパイルするタスクの作成
gulp.task("sass", done => {
    return (
        gulp
            .src("src/sass/main.scss")
            .pipe(plumber(notify.onError('Error:<%= error.message %>')))
            .pipe(sass({
                outputStyle: "expanded"
            }))
            .pipe(autoprefixer())
            .pipe(cleancss())
            .pipe(gulp.dest("dist/css/"))
            .pipe(browser.reload({stream:true}))
            .pipe(notify("Sassをコンパイルしました!"))
    );
});

// gulp.task("server", function(){
//     browser({
//         server: {
//             baseDir: './'
//         }
//     });
// });

// ファイルを監視する
gulp.task("watch", done => {
    gulp.watch("/src/sass/**.scss", gulp.series(["sass"]));
});

// タスクの実行
gulp.task("default", gulp.series(["watch"], () => {}));
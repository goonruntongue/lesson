//ランダムおみくじアプリの作成

// -------------------------------

// let color = ["赤", "青", "黄"];
// $("button").on("click", function() {
//     $("div").text(color[0]);
// });

//let：同じブロック内で再定義不可な変数宣言
//配列の基本
//buttonにclickイベントリスナーを登録する
// textメソッドで要素内の文字を変更する


// -------------------------------

// $("button").on("click", function() {
//     let r = Math.floor(Math.random() * 3);
//     $("div").text(color[r]);
// });

//Math関数による、ランダムな整数のとりだし



// -------------------------------

function roll(n) {
    setTimeout(() => {
        if (n < 50) {
            let r = Math.floor(Math.random() * 3);
            $("div").text(color[r]);
            roll(n + 1);
        }
    }, 100);
}
$("button").on("click", function() {
    roll(0);
});

// 再帰的な関数実行を組み込んで、ルーレットにする
// 引数nが50になるまで、0.1秒ごとに繰り返す
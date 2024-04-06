// 再帰的な呼び出し

//  -------------------------
function pPut1() {
    $("body").append("<p>A</p>");
    pPut1();
}
// pPut1();
//無限ループ発生、ブラウザクラッシュ


//  -------------------------
function pPut2(i) {
    if (i < 10) {
        $("body").append("<p>B</p>");
        pPut2(i + 1);
    }
}
// pPut2(0);
//繰り返しをif文と引数で制御、同時に10個出現


//  -------------------------
function pPut3(i) {
    if (i < 10) {
        setTimeout(function() {
            $("body").append("<p>C</p>");
            pPut3(i + 1);
        }, 100);
    }
}
pPut3(0);
//setTimeoutで0.1秒のウェイトをつけて再帰的に呼び出す
$("form").on("submit", function(e) {
    e.preventDefault(); //フォーム本来の挙動（ページ変遷）をキャンセルする書き方
    let formData = new FormData(this);
    $.ajax({
        url: "backend.php", //バックエンドのPHPなどのファイルパスを指定
        type: "POST", //"送信タイプ・だいたいはPOSTかGET"
        data: formData, //"バックエンドに送るデータ"
        contentType: false, //FormData(this)を送るときには必須
        processData: false, //FormData(this)を送るときには必須
        success: function(result) { //送信が成功した場合に返ってくるデータ（result）
            console.log(result); //例）コンソールにうけとったデータ（result）を出す
        }
    })
})
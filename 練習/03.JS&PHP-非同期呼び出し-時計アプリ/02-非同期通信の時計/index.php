<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <style>
    * {
        box-sizing: border-box;
        font-family: "Poppins", "Noto Sans JP", sans-serif;
    }

    .clock {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
    }
    </style>
</head>

<body>
    <div class="clock">
    </div>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    // updateTime関数を定義しましょう
    // jQueryの$.getメソッドで、バックエンド(watch.php)の内容を非同期でとって来ます
    // 取得できたものをdataという引数として、$(".clock")の中にテキストとしてechoする
    // その後、updateTime関数を再帰的に呼び出します。
    setTimeout(updateTime, 1000);
    //1秒間隔でupdateTimeを実行
    </script>
</body>

</html>
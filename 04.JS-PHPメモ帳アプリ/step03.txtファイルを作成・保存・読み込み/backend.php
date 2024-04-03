<?php
if (isset($_POST["comment"])) :
    $comment = "<div>" . $_POST["comment"] . "</div>";
    //おまけ:改行および、空白も認識させたい場合
    //$comment = "<div>".nl2br(str_replace(" ", "&nbsp;", $_POST["comment"]))."</div>";

    date_default_timezone_set("asia/Tokyo");
    $timestamp = date("Y年m月d日H時i分s秒");

    $fileName = "memo-{$timestamp}.txt";
    file_put_contents("data/$fileName", "$comment", FILE_APPEND);
endif;

$fileNames = glob("data/*.txt");

foreach ($fileNames as $fileName) {
    echo file_get_contents($fileName);
}

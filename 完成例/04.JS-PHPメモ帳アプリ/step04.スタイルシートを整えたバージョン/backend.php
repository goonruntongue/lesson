<?php
if (isset($_POST["comment"])) :

    $comment = "<div>" .  nl2br(str_replace(" ", "&nbsp;", htmlspecialchars($_POST["comment"], ENT_QUOTES))) . "</div>";

    date_default_timezone_set("asia/Tokyo");
    $timestamp = date("Y年m月d日H時i分s秒");

    $fileName = "memo-{$timestamp}.txt";
    file_put_contents("data/$fileName", "$comment", FILE_APPEND);
endif;

$fileNames = glob("data/*.txt");

foreach ($fileNames as $fileName) {
    echo file_get_contents($fileName);
}
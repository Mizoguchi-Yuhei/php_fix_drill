<?php
error_reporting(0);  // とりあえずエラーを表示させないだけならこの記述
$point = 50;
$message = "";
if ($point >= 80) {
    $message = "合格！";
}
echo $message;

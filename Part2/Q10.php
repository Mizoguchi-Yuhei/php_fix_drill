<?php
$point = "100";
// $point >= 60 ? echo "合格" : echo "不合格";

// $point >= 60 ? $result = "合格" : $result = "不合格";
// echo $result;

$point >= 60 ? print "合格" : print "不合格";

echo $point >= 60? "合格" : "不合格";

$a = "値あり";
$b = "値なし";
$c = null;
echo $a ?? $b;
echo $c ?? $b;  // 変数$cがnullでなければ$c、それ以外は$b
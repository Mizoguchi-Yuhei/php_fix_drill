<?php
$a = "テスト";
// $b = mbstrlen($a);
$b = mb_strlen($a);
echo "文字数：{$b}";
echo "文字数：". $b;
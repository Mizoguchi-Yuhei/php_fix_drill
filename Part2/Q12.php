<?php
$var = "テスト";
// function var($var) {
//     echo $var;
// }
// var($var);
function f($var) {
    echo $var;
}
f($var);

// 「var」は予約語なので関数名には使えない。
// $var = "テスト";
// function var1($var) {
//     echo $var;
// }
// var1($var);

// 上記でも可
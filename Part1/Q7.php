<?php
// .htaccessに記述したコード
// php_value error_reporting E_ALL

// .htaccessにはPHP設定ファイル（php.ini）で使うE_ALLのような設定値は使えない
// その設定値を数値で指定する必要がある
// 今回の場合
// php_value error_reporting 6143
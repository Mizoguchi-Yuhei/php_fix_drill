<?php
// Fatal error: Cannot redeclare test() (previously declared in ….php:6) in ….php on line 7
// 上記のエラーメッセージが表示される原因と対策

// 下記のコードで発生する
function test() {}
    function test() {}

    // 既存のユーザー定義関数を二重定義した際に発生するエラー

    // 理由
    // include/require文による多重定義
    // 外部ファイルの関数と名前競合が発生した
    // 入れ子関数の多重定義が発生した

    // 対応と対策
    // include_once/require_once文による対策
    // 定義済み関数のチェックによる対応
    // 無名関数による多重定義の回避
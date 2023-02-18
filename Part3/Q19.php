<?php
// 「HTTP 500 内部サーバーエラー」というタイトルの画面に「Webサイトはページを表示できません」とだけ表示されるそうです。
// この状況から、エラーメッセージを表示しないように設定されていると判断し、PHP設定ファイル(php.ini)の設定を変更するようにアドバイスしたところ、具体的なエラーメッセージが表示されるようになり、うまくPHPスクリプトを修正できたそうです。具体的なエラーメッセージが表示されずに上記の画面が表示される原因と、アドバイスした内容を考えてください。

// PHP設定ファイル（php.ini）で「display_errors = Off」のように
// エラーメッセージを表示しないように設定されていることが考えられる。
// display_errors = Onに変更し、error_reportingをE_ALLに設定すれば、
// PHPスクリプト実行時に問題があれば具体的なメッセージが表示されるようになる。
// php.iniファイル変更後はWebサーバーの再起動が必要。
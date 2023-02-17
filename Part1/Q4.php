<?php
function update($v) {
    global $status;
    $status = $v;
}

$status = "変更前";

update("変更後");

echo $status;

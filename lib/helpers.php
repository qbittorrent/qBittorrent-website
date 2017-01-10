<?php

function readMarkdown($file) {
    require_once('lib/Parsedown.php');

    if (!file_exists($file)) return;

    $result = file_get_contents($file);
    if (!$result) return;
    echo Parsedown::instance()->text($result), PHP_EOL;
}

?>

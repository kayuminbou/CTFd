<?php
$file = getenv('FILENAME');
$link = "?source";
file_put_contents($file, $link, LOCK_EX);
?>
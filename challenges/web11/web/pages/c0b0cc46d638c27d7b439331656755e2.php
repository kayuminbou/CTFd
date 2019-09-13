<?php
$json_file="c0b0cc46d638c27d7b439331656755e2.json";
$arr = array();
$arr[] = [
    'time' => "9999/99/99 00:00:00",
    'text' => "These messages are deleted every 10 minutes.",
];
$en_json = json_encode($arr);
file_put_contents($json_file, $en_json, LOCK_EX);
?>
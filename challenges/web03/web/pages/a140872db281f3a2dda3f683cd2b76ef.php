<?php
$json_file="a140872db281f3a2dda3f683cd2b76ef.json";
$arr = array();
$arr[] = [
    'time' => "9999/99/99 00:00:00",
    'text' => "These messages are deleted every 20 minutes.",
];
$en_json = json_encode($arr);
file_put_contents($json_file, $en_json, LOCK_EX);
?>
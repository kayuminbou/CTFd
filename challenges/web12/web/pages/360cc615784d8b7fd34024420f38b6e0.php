<?php
$json_file="360cc615784d8b7fd34024420f38b6e0.json";
$arr = array();
$arr[] = [
    'time' => "9999/99/99 00:00:00",
    'text' => "These messages are deleted every 20 minutes.",
];
$en_json = json_encode($arr);
file_put_contents($json_file, $en_json, LOCK_EX);
?>
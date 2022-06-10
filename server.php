<?php
include __DIR__ . "/database.php";
$database_json = json_encode($albums);
header("Content-Type: application/json");
echo $database_json;
?>
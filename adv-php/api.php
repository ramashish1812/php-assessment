<?php
header('Content-Type: application/json');

$file = "logs.json";
if(!file_exists($file)) file_put_contents($file, "[]");

$action = $_GET["action"] ?? "";

if($action=="save") {
    $data = json_decode(file_get_contents("php://input"), true);
    $logs = json_decode(file_get_contents($file), true);
    $data["date"] = date("Y-m-d H:i:s");
    $logs[] = $data;
    file_put_contents($file, json_encode($logs));
    echo json_encode(["status"=>"ok"]);
    exit;
}

if($action=="load") {
    $logs = json_decode(file_get_contents($file), true);
    echo json_encode($logs);
    exit;
}
?>

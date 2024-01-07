<?php

$data = [
    "action" => "Create"
];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;


//sama
$data = [
    "action" => "Create",
];  

if(isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "Nothing";
}
echo $action . PHP_EOL;
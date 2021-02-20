<?php
error_reporting(0);
function error($msg)
{
    $response = array("success" => false, "message" => $msg);
    return json_encode($response);
}
$name = $_POST["name"];
if ($name == '') {
    die(error('Error: No name'));
}
$message = "Created " . $name;

$response = array();
$response["success"] = true;
$response["message"] = $message;
$response["jeff"] = array(1, 2, 3, 4, 5);

echo json_encode($_POST["mike"]);

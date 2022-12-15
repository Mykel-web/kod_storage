<?php
$obiekt = json_decode(stripslashes(file_get_contents("php://input")));
header('content-type: application/json');
$response = json_encode($obiekt);
echo $response;
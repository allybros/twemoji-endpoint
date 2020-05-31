<?php
/**
 * Created by Umut Can Alaçam,
 * with emoji.json
 * This simple script retrieves emoji's from MaxCdn according to the name
 */
include_once "resources/data.php";

//Get query params
if (!isset($_GET["name"])) {
    die_response(0, "Parameters wrong.");
}

//Get emoji file name
$queryName = $_GET["name"];
$code = strtolower(EMOJI_MAP[$queryName]);

if ( empty($code) || $code == null) {
    die_response(40, "Invalid name.");
}

/** Echo SVG file **/
$svg_url = CDN_END_POINT . $code . ".svg";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $svg_url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(curl_exec($ch) === FALSE) {
    die_response(0, "Couldn't read file.");
} else {
    header("Content-type: image/svg+xml");
    echo curl_exec($ch);
}

curl_close($ch);


function die_response($code, $message){
    header('Content-Type: application/json');
    $response["status"] = $code;
    $response["message"] = $message;
    echo json_encode($response);
    exit();
}
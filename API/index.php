<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header('Access-Control-Max-Age: 1000');
//header("Content-type: application/json");


$result = array();

//GET THE USER APIKEY
$formData = json_decode(file_get_contents('php://input'), TRUE);
$apikey = $_GET['key'];

//RETRIEVE THE DATA IF API KEY
if(! $apikey){
    $result["success"]=false;
    $result["message"]="No API key provided";
    $result["results"]="";
}
else {

    if(isset($formData['usage']) && isset($formData['environment']) && isset($formData['career']) && isset($formData['family'])) {
        if ($_SERVER['REQUEST_METHOD'] === "POST") { include "post.php"; }
    
        //UNSUPPORTED VERB
        if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $result["success"]=false;
            $result["message"]="Not supported";
            $result["results"]="";
        }
    }
    else {
        //MISSING PROPERTY
        $result["success"]=false;
        $result["message"]="Missing properties. Be sure you send [usage, environment, career, family].";
        $result["results"]="";
    }

    
}

echo json_encode($result, JSON_NUMERIC_CHECK);

?>
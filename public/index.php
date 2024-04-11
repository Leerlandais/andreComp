<?php
require_once "../config.php";
require_once "../model/andre.model.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$getComp = getAllCompanies($db);

if(isset($_POST["comp_inp"])) {
    $addComp = addNewCompany($db, $_POST["comp_inp"]);  
}

if(isset($_POST["inpJan"]) && 
    isset($_POST["inpFeb"]) && 
    isset($_POST["inpMar"]) && 
    isset($_POST["inpApr"]) && 
    isset($_POST["inpMay"]) && 
    isset($_POST["inpJun"]) && 
    isset($_POST["inpJul"]) && 
    isset($_POST["inpAug"]) && 
    isset($_POST["inpSep"]) && 
    isset($_POST["inpOct"]) && 
    isset($_POST["inpNov"]) &&
    isset($_POST["inpDec"]))
    {
        $cleanedInputs = array();
        foreach ($_POST as $input => $amount) {
    var_dump($input, $amount);
    $cleanedInputs[$input] = htmlspecialchars(strip_tags(trim($amount)), ENT_QUOTES);
}
    var_dump($cleanedInputs);
    }

$db = null;
include "../view/mainView.php";
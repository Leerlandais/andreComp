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

$db = null;
include "../view/mainView.php";
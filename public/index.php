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

if(isset($_POST["inc_jan"]) && 
    isset($_POST["inc_feb"]) && 
    isset($_POST["inc_mar"]) && 
    isset($_POST["inc_apr"]) && 
    isset($_POST["inc_may"]) && 
    isset($_POST["inc_jun"]) && 
    isset($_POST["inc_jul"]) && 
    isset($_POST["inc_aug"]) && 
    isset($_POST["inc_sep"]) && 
    isset($_POST["inc_oct"]) && 
    isset($_POST["inc_nov"]) &&
    isset($_POST["inc_dec"]))
    {
   var_dump($_POST["compID"]);
        foreach ($_POST as $input => $amount) {
    var_dump($input, $amount);
    $cleanedInputs[$input] = htmlspecialchars(strip_tags(trim($amount)), ENT_QUOTES);
}
    var_dump($cleanedInputs);

        foreach ($cleanedInputs as $inputs => $amounts) {
        $sql = "INSERT INTO `income` ($inputs) VALUES  ?";
        $stmt = $db->prepare($sql);
    
 
        try {
            $stmt->execute([$amounts]);
        //    $db->commit();
        $stmt->closeCursor();
            return true;
        } catch (PDOException $e) {
            error_log("Error adding incomes: " . $e->getMessage());
            return false;
        } 
    }
        }
   





$db = null;
include "../view/mainView.php";
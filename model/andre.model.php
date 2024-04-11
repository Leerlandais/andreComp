<?php

function addNewCompany(PDO $db, $compName) : array | string {
    
    $cleanedName = htmlspecialchars(strip_tags(trim($compName)), ENT_QUOTES);
    $sql = "INSERT INTO `company` (`nom_comp`) VALUES (:nom)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nom', $cleanedName);
    try {
        $stmt->execute();
        $db->commit();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding Artist: " . $e->getMessage());
        return false;
    } 
}

function getAllCompanies(PDO $db) : array | string {
    $sql = "SELECT nom_comp as nom
            FROM company
            ORDER BY nom";

try {
    $query = $db->query($sql);
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
    
}catch(Exception $e){
    return $e->getMessage();
}
}
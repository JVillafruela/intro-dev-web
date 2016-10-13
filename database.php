<?php

function dbconnect() {
    $host="localhost";
    $dbname="introweb";
    $user="introweb";
    $password="introweb";
    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, 
            $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
        
    }
    catch (Exception $e) {
        die('Erreur fatale : ' . $e->getMessage());
    }
    
    return $bdd;
}
?>
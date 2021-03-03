<?php
ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);

require 'DB/DB.php';
$db = DB::getInstance();

$userRequest = "INSERT INTO eleves(nom, prenom, age) VALUES ('Belle', 'Bubulle', '1')";


if($db->exec($userRequest)) {
    echo $db->lastInsertId();

    $userId = $db->lastInsertId();

};
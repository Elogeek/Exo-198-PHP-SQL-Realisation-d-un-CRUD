<?php
require './DB/DB.php';
require 'Entity/Entities.php';
require './Manager/EleveManager.php';
require './Classes-statiques/ClientsStatics.php';
require './Classes-statiques/UtilisateursStatics.php';

$db = DB::getInstance();

$requeteSQL = "INSERT INTO classe_test_php.eleves(id, nom, prenom, age) VALUES ()";


$db->exec($requeteSQL);
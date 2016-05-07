<?php
$serverAdr = "";
$dbName = "";
$login = "";
$password = "";

try{
    $calendar = new PDO('mysql:host='.$serverAdr.';dbname='.$dbName.'', $login, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}
$sql = "DELETE FROM calendar WHERE calendarDate < NOW();";
$calendar->exec($sql);
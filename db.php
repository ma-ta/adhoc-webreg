<?php

// Připojení k databázi
$db_host = "localhost";
$db_jmeno = "root";
$db_heslo = "";
$db_databaze = "databaze";

// PDO(mysql:host=localhost;dbname=test;charset=utf8", $user, $pass)
try {
    $db = new PDO("mysql:host=" . $db_host . ";charset=utf8;dbname=" . $db_databaze, $db_jmeno, $db_heslo);
}
catch (PDOException $e) {
    //echo($e);
}
?>

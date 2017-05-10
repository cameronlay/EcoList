<?php

$DB_host="localhost"; 

$DB_user="root"; 
$DB_pass=""; 

$user='admin';
$pass='admintemp';
$DB_name="2910"; 
    try {
        $dbh = new PDO("mysql:host=$DB_host", $DB_user, $DB_pass);

        $dbh->exec("CREATE DATABASE IF NOT EXISTS `$DB_name`;");
		$dbh = null;

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
?>
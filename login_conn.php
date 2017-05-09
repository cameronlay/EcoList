<?php
include('conn.php');
try {
	$DB_conn = new PDO("mysql:host={$DB_host};dbname={$DB_name};",$DB_user,$DB_pass);
	$DB_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$DB_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	$sql_users = "CREATE TABLE IF NOT EXISTS `users` (
	`id` INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`username` VARCHAR(255) NOT NULL,
	`user_email` VARCHAR(255) NOT NULL,
	`user_pass` VARCHAR(255) NOT NULL,
	UNIQUE (`username`),
	UNIQUE (`user_email`))
	ENGINE = MYISAM ;";
	$sql_recipes = "CREATE TABLE IF NOT EXISTS `recipes` (
	`recipe_name` VARCHAR(255) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`cooking_steps` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`diet_id` INT( 7 ) NOT NULL,
	UNIQUE (`recipe_name`)
	)
	ENGINE = MYISAM";
	$DB_conn->exec($sql_users);
	$DB_conn->exec($sql_recipes);
	$DB_conn = null;
}
catch(PDOException $e)
{
	die($e->getMessage());
}

?>
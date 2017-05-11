<?php
include('login_conn.php');
$retrieved_username = "somename";
$retrieved_email = "somemail";
$retrieved_password = "123456";
$retrieved_password = password_hash($retrieved_password,PASSWORD_DEFAULT);
try{
	$DB_conn = new PDO("mysql:host={$DB_host};dbname={$DB_name};",$DB_user,$DB_pass);
	$DB_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$DB_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$add_users = "INSERT INTO `users`(`id`,`username`,`user_email`,`user_pass`)
	VALUES (NULL,:uname, :uemail, :upassw);";
	$binding = $DB_conn->prepare($add_users);
	$binding->bindParam(':uname',$retrieved_username);
	$binding->bindParam(':uemail',$retrieved_email);
	$binding->bindParam(':upassw',$retrieved_password);
	$binding->execute();
}
catch(PDOException $e)
{
	die($e->getMessage());
}
?>
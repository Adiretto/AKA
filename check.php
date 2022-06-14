<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'Adilet');
define('DB_PASSWORD','6266');
define('DB_NAME','aka');
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);

$password = md5($password);
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($mysql->connect_errno)
	exit('Ошибка');
$mysql->query("INSERT INTO `registration` (`name`,`password`,`email`,`phone number`) VALUES('$name',
	'$password','$email','$phone')");
$mysql->set_charset('utf8');
$mysql ->close();
header("location: /registration.php")
?>
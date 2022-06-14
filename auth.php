<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'Adilet');
define('DB_PASSWORD','6266');
define('DB_NAME','aka');
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$password = md5($password);
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($mysql->connect_errno)
	exit('Ошибка');
$result =$mysql->query("SELECT * FROM `registration` WHERE `email` = '$email' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0){
	echo "not found";
	exit();
}
setcookie('user',$user['name'],time()+3600,'');
$mysql ->close();
header("location: /authorization.php")
?>
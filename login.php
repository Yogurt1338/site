<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass);

$mysql = new mysqli('localhost','root','','register');

$result = $mysql ->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$pass' ");
$user = $result -> fetch_assoc();
if(count($user) == 0)
{echo "Такой пользователь не найден";  exit();}

if($user["Admin"]==1)
{
session_start();
$_SESSION['userID'] = "Admin";
}

else{
session_start();
$name = $_POST['login'];
$_SESSION['userID'] = $name;}

setcookie('user', $user['login'], time() + 300, "/");

  $mysql->close();

header('Location: index.php');
 ?>

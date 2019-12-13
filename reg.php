<?php
  $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
  $pass1 = filter_var(trim($_POST['pass1']), FILTER_SANITIZE_STRING);

if (empty($login) || empty($mail) || empty($pass) || empty($pass1))
{echo "Все поля должны быть заполнены"; exit();}

if ($pass !== $pass1)
{echo "Пароли не совпадают"; exit(); }

if (preg_match('/^([a-zA-Z0-9._-])+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/', $mail)) {;}
else {echo "Неверный адрес почты <br>";exit();};

if (strlen($pass)>=8  || strlen($pass) > 30) {
if (preg_match('/[a-z]{1,}/', $pass)&&preg_match('/[A-Z]{1,}/', $pass)&&preg_match('/[0-9]{1,}/', $pass)&&preg_match('/[\. , % $ # @ & * ^ | \\\ \/ ~ \[ \] { }]{1,}/', $pass)) {;}
else {echo "Invalid password <br>";exit();}}
else {echo "Invalid password <br>";exit();};

if (strlen($login)>=6 || strlen($login) > 30) {
if (preg_match('/^([a-zA-Z])+[a-zA-Z0-9_]{1,20}$/', $login)) {;}
else {echo "Invalid login <br>";exit();}}
else {echo "Invalid login <br>";exit();};

$pass = md5($pass);

  $mysql = new mysqli('localhost','root','','register');
  $mysql ->query("INSERT INTO `users` (`mail`, `login`, `password`)
  VALUES('$mail', '$login', '$pass')");

  $mysql->close();

 header('Location: index.php');

 ?>

<?php
$top = filter_var(trim($_POST['top']), FILTER_SANITIZE_STRING);
$sheet = filter_var(trim($_POST['sheet']), FILTER_SANITIZE_STRING);
$today = date("Y-m-d");

if ((empty($top)) or (empty($sheet)))
{echo "Поле не может быть пустым"; exit();}

$mysql2 = new mysqli('localhost','root','','register');
$mysql2 ->query("INSERT INTO `news` (`top`, `sheet`, `date`)
VALUES('$top','$sheet','$today')");

$mysql2->close();

header('Location: index.php');
 ?>

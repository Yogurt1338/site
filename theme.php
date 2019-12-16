<?php
session_start();
$uid=$_SESSION['userID']
?>
<?php
$theme = filter_var(trim($_POST['theme']), FILTER_SANITIZE_STRING);
$descript = filter_var(trim($_POST['descript']), FILTER_SANITIZE_STRING);
$today = date("Y-m-d");

if ((empty($theme)) or (empty($descript)))
{echo "Поле не может быть пустым"; exit();}


$mysql2 = new mysqli('localhost','root','','register');
$mysql2 ->query("INSERT INTO `themes` (`uid`, `name`, `theme`, `date`)
VALUES('$uid','$theme','$descript','$today')");

$mysql2->close();
 header('Location: forum.php');
 ?>

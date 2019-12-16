<?php
session_start();
$uid=$_SESSION['userID']
?>
<?php
$comment = filter_var(trim($_POST['comment']), FILTER_SANITIZE_STRING);
$idtheme = $_POST['idtheme'];
$today = date("Y-m-d");

if (empty($comment))
{echo "Поле не может быть пустым"; exit();}

$mysql2 = new mysqli('localhost','root','','register');
$mysql2 ->query("INSERT INTO `comments` (`uid`, `date`, `comment`, `idtheme`)
VALUES('$uid','$today','$comment','$idtheme')");

$mysql2->close();

header('Location: forum.php');
 ?>

<?php
$rule = filter_var(trim($_POST['rule']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);



$mysql3 = new mysqli('localhost','root','','register');

if ($rule==1){
$query = "UPDATE `users` SET admin = 1 WHERE login='$login'";
  mysqli_query($mysql3,$query);}

if ($rule==0){
$query = "UPDATE `users` SET admin = 0 WHERE login='$login'";
  mysqli_query($mysql3,$query);}


mysqli_close($mysql3);
header('Location: adminform.php');
 ?>

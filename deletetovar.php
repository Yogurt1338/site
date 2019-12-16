<?php
$id = $_GET["id"];
$mysql3 = new mysqli('localhost','root','','register');
$query = "DELETE FROM `processors` WHERE Id='$id'";
  mysqli_query($mysql3,$query);

mysqli_close($mysql3);
header('Location: processors1.php');
 ?>

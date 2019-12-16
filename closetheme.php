<?php
$idtheme = $_GET["idtheme"];
$mysql3 = new mysqli('localhost','root','','register');
$query = "UPDATE `themes` SET close = 1 WHERE Id='$idtheme'";
  mysqli_query($mysql3,$query);

mysqli_close($mysql3);
header('Location: forum.php');
 ?>

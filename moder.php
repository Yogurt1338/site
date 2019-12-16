<?php
$comid = $_GET["comid"];
$mysql3 = new mysqli('localhost','root','','register');
$query = "DELETE FROM `comments` WHERE Id='$comid'";
    mysqli_query($mysql3,$query);

mysqli_close($mysql3);
header('Location: forum.php');
 ?>

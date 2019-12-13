<?php
  $Vender = filter_var(trim($_POST['vender']), FILTER_SANITIZE_STRING);
  $Model = filter_var(trim($_POST['model']), FILTER_SANITIZE_STRING);
  $Core = filter_var(trim($_POST['core']), FILTER_SANITIZE_STRING);
  $Year = filter_var(trim($_POST['year']), FILTER_SANITIZE_STRING);
  $Image = addslashes(file_get_contents($_FILES['img']['tmp_name']));

  $mysql1 = new mysqli('localhost','root','','register');
  $mysql1 ->query("INSERT INTO `processors` (`vender`, `model`, `core`, `year`, `img`)
  VALUES('$Vender', '$Model', '$Core', '$Year', '$Image')");

  $mysql1->close();

 header('Location: adminform.php');
 ?>

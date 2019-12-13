<?php
setcookie('user', $user['login'], time()-3600,"/");
session_start();
session_unset();
session_destroy();
header('Location: index.php');
?>

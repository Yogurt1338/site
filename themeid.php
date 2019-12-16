<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Xogurt</title>
	<link href="style.css" rel="stylesheet">
    <link href="logreg.css" rel="stylesheet">
  <script type="text/javascript">
  		function startTime(){
  			var tm=new Date();
  			var h=tm.getHours();
  			var m=tm.getMinutes();
  			var s=tm.getSeconds();
  			m=checkTime(m);
  			s=checkTime(s);
  			document.getElementById('timer').innerHTML=h+":"+m+":"+s;
  			t=setTimeout('startTime()',500);
  			}
  			function checkTime(i)
  			{
  			if (i<10)
  			{
  			i="0" + i;
  			}
  			return i;
  		}

  		var data = new Date();
  		var month=new Array(12);

  	</script>
</head>
<body onload="startTime()">
<div class="wrapper">
    <div class="head-top">
			<div class="container">
				<div class="row">

        	<div class="qw1">
							<a href="index.php"><img id="logo" src="images/logo.png" alt="Xogurt" /></a>
					</div>

          <div class="qw2">
						<div class="head-center">
  <script type="text/javascript">
           document.write("Текущее время:");
  </script>
							<div id="timer"></div>
						</div>
					</div>

					<div class="qw3">
						<div class="menu">
							<ul class="bar">
          <?php
          if (isset($_SESSION['userID'])):
          ?>
                <li><?php echo$_SESSION["userID"];?></li>
                <?php
                if($_SESSION['userID'] == "Admin"):
                ?>
                        <li> <a href='adminform.php'>Модерация</a></li>
                <?php
                endif;
                ?>

								  <li><a href="exit.php"> Выход</a></li>
            <?php
            else:
            ?>
                  <li><a href="reg.html"> Регистарция</a></li>
                  <li><a href="login.html"> Вход</a></li>
            <?php
          endif;
             ?>
          		</ul>
						</div>
					</div>

        </div>
			</div>
		</div>


		<div class="head-bottom">
			<div class="container">
				<div class="row">

					<div class="qw4">
						<div class="barmenu">
							<ul class="bar">
								<li><a href="index.php" class="active">Домашняя</a></li>
								<li><a href="forum.php">Форум</a></li>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</div>


	<div class="content">
		<div class="container">
			<div class="row">

        <div class="qw7">
          <div class="content">



<?php

$idtheme = $_GET["id"];

            $mysql5 = new mysqli('localhost','root','','register');
       $result6 ="SELECT * FROM `themes` WHERE id=$idtheme";
         $result3 = mysqli_query($mysql5, $result6);

         if($result3)
          $row = "";
           while($row = $result3->fetch_assoc())
{
             $theme=$row['name'];
             $descript=$row['theme'];
             $date=$row['date'];
             $close=$row['close'];
             $user=$row['uid'];
}

echo "<table width='1000px'>";

if(($_SESSION['userID'] == "Admin") && ($close==0)){
echo "<tr width='30%' ><td colspan='2'><h3> $theme </h3> </td> <td> <a href=closetheme.php?idtheme=$idtheme> Закрыть тему </a> </td></tr> ";
}
elseif ($close==1) {
Echo "<tr width='30%' ><td colspan='2'><h3> $theme </h3><td><h5>Эта тема закрыта<h5></td> </td></tr> ";
}


echo "<tr width='30%' ><td> $user</td></tr>";
if($close==1){
echo "<tr width='70%' ><td rowspan='2'>$date</td></tr>";
}
else{
echo "<tr width='70%'><td rowspan='2'>$date</td><td></td></tr>";
}
Echo "<tr width='30%'><td colspan='2'>$descript</td></tr>";

$mysql3 = new mysqli('localhost','root','','register');
$result4 ="SELECT * FROM `comments` WHERE idtheme = $idtheme";
$result2 = mysqli_query($mysql3, $result4);

if($result2)
$proc = "";
while($proc = $result2->fetch_assoc()){
$datemsg=$proc['date'];
$comment=$proc['comment'];
$user=$proc['uid'];
$comid=$proc['Id'];

if($_SESSION['userID'] == "Admin"){
Echo "<td> $user </td> <td colspan='2' rowspan='2'>$comment</td><td> <a href=moder.php?comid=$comid> удалить комметарий </a></td> </tr>";
}
else{
Echo "<td> $user </td> <td colspan='2' rowspan='2'>$comment</td></tr>";
}

echo "<tr><td>$datemsg</td></tr>"; }


echo "</table>";

mysqli_close($mysql3);
 mysqli_close($mysql5);

 ?>



<?php if ((isset($_SESSION['userID']))&& ($close==0)): ?>


 <h2>Оставить комметарий</h2>
 <form action="comment.php" method="post">
   <input type="text" name="comment" > <br>
   <input type="hidden" name="idtheme" value=" <?php echo $idtheme ?> ">
   <input type="submit" name="submit" value="подтвердить">
 </form>

<?php elseif($close==0):  ?>
<h4>чтобы оставить комметарий вводите или зарегистрируйтесь</h4>
<a href="login.html">Вход</a><br>
<a href="reg.html">Регистарция</a>

<?php endif; ?>

          </div>
        </div>

      </div>
    </div>
	</div>


	<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="qw6">
							<h2>Разработано на Иу4</h2>
              <ul class="widget">
								<li><a href="about.html">О форуме</a></li>
								<li><a href="https://vk.com/yogurt96">Связь с админом</a></li>
							</ul>
						</div>
					</div>
					</div>
	</footer>
</div>


</body>
</html>

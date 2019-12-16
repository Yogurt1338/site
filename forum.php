<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Xogurt</title>
	<link href="style.css" rel="stylesheet">
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
        <?php
        if(isset($_SESSION['userID'])):
        ?>
        <div class="qw6">
          <div class="sidebar">

            <div class="Adt">
                <ul>
                  <li><a href="addtheme.php">Создать тему</a></li>
                </ul>
              </div>
          </div>
        </div>

        <?php
        endif;
        ?>

        <div class="qw7">
          <div class="content">
            <?php

            $mysql1 = new mysqli('localhost','root','','register');
       $result2 ="SELECT * FROM `themes` ORDER BY Date";
         $result1 = mysqli_query($mysql1, $result2);

         if($result1)
          $proc = "";
           while($proc = $result1->fetch_assoc()){

?><div class='theme'>
   <?php
$uid=$proc['uid'];
$theme=$proc['name'];
$descript=$proc['theme'];
$date=$proc['date'];
$close=$proc['close'];
$idtheme=$proc['Id'];
?>
<table width="1000px">
</tr>
<?php
   Echo  "<a href=themeid.php?id=$idtheme> $theme </a>" ;?><br><?php
   Echo  " $descript" ;
?>
<br><br>
</tr>
</table>
</div>

 <?php
}
  //      mysqli_free_result($result1);

        mysqli_close($mysql1);


         ?>

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

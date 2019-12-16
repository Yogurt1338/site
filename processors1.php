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
                  <li><?php echo$_SESSION["userID"];?></li>
                  <?php
                  if($_SESSION['userID'] == "Admin"):
                  ?>
                          <li> <a href='adminform.php'>Модерация</a></li>
                  <?php
                  endif;
                  ?>

                  <?php
                  if(isset($_SESSION['userID'])):
                  ?>
                  <li><a href="exit.php"> Выход</a></li>

                  <?php
                  else :
                  ?>
                  <li><a href="reg.html"> Регистрация</a></li>
  								<li><a href="login.php"> Вход</a></li>
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

  				<div class="qw6">
  					<div class="sidebar">
  						<h2 class="sort">Категория</h2>
  						<div class="category">
                  <ul>
                    <li><a href="processors1.php" title="Процессоры">Процессоры</a></li>
                    <li><a href="category/ozu.html" title="Оперативная память">Оперативная память</a></li>
                    <li><a href="category/motherboards.html" title="Материнские платы">Материнские платы</a></li>
                    <li><a href="category/graphic.html" title="Видеокарты">Видеокарты</a></li>
                    <li><a href="category/cooling.html" title="Системы охлаждения">Системы охлаждения</a></li>
                    <li><a href="category/storage.html" title="Накопители">Накопители</a></li>
                    <li><a href="category/cases.html" title="Корпуса">Корпуса</a></li>
                    <li><a href="category/power.html" title="Источники питания">Источники питания</a></li>
                  </ul>
                </div>
            </div>
            <div class="sidebar">
                 <div>
                   <form action="" method="POST">
                     <h2 class="sort">Сортировка по:    </h2>
                      <ul>
                        <li> <a href="processors1.php?sort=year-desc"> по новизне</a> </li>
                        <li> <a href="processors1.php?sort=core-desc"> по количеству ядер(сначала наибольшее) </a> </li>
                      </ul>
                 </div>
             </div>
  				</div>



          <div class="qw7">
            <div class="content">
              <?php
              $sorting = $_GET["sort"];
              switch ($sorting)
              {
                case 'year-desc';
                $sorting = 'year DESC';
                $sort_name = 'По новизне';
                break;

                case 'core-desc';
                $sorting = 'core DESC';
                $sort_name = 'По количеству ядер';
                break;

                default:
                $sorting = 'id DESC';
                $sort_name = 'Нет сортировки';
                break;

              }

              $mysql1 = new mysqli('localhost','root','','register');
         $result2 ="SELECT * FROM `processors` ORDER BY $sorting";

           $result1 = mysqli_query($mysql1, $result2);

           if($result1)
            $proc = "";
             while($proc = $result1->fetch_assoc()){

  ?><div class='cpu'>
     <?php
$ven=$proc['Vender'];
$mod=$proc['Model'];
$id=$proc['Id'];
     Echo  '<img src=\'data:image/jpg;base64,' .base64_encode($proc['Img']). '\' />';?></br></br><?php
     Echo  "<a href=info.php?id=$id> $ven $mod </a>" ;
  ?></div> <?php
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


    </body>
    </html>

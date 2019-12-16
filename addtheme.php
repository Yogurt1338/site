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
<?php
if (isset($_SESSION['userID'])):
?>
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
                <li><?php echo$_SESSION["userID"];?></li>
                <?php
                if($_SESSION['userID'] == "Admin"):
                ?>
                        <li> <a href='adminform.php'>Модерация</a></li>
                <?php
                endif;
                ?>

								<li><a href="exit.php"> Выход</a></li>
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

<h2>Созать тему</h2>
<form action="theme.php" method="post">
  <input type="text" name="theme" id="theme" placeholder="Введите название темы"> <br>
  <input type="text" name="descript" id="descript" placeholder="Введите описнаие темы"> <br>
   <input type="submit" class="btn"name="submit" value="подтвердить">
</form>

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



<?php
else:
?>

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
								<li><a href="reg.html"> Регистарция</a></li>
								<li><a href="login.html"> Вход</a></li>
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
                  <li><a href="ozu.html" title="Оперативная память">Оперативная память</a></li>
                  <li><a href="motherboards.html" title="Материнские платы">Материнские платы</a></li>
                  <li><a href="graphic.html" title="Видеокарты">Видеокарты</a></li>
                  <li><a href="cooling.html" title="Системы охлаждения">Системы охлаждения</a></li>
                  <li><a href="storage.html" title="Накопители">Накопители</a></li>
                  <li><a href="cases.html" title="Корпуса">Корпуса</a></li>
                  <li><a href="power.html" title="Источники питания">Источники питания</a></li>
                </ul>
              </div>
					</div>
				</div>

        <div class="qw7">
          <div class="content">
            Чувак, здесь ничего не происходит
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

<?php
endif;
?>


</body>
</html>

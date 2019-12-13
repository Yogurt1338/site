<?php session_start();
if($_SESSION['userID'] == "Admin"):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Xogurt</title>
	<link href="style.css" rel="stylesheet">
  <link rel="logreg.css" href="/css/master.css">
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
								<li><a href="wish.html"> Закладки</a></li>
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
								<li><a href="forum.html">Форум</a></li>
							</ul>
						</div>
					</div>

					<div class="qw5">
						<div class="search">
							<input type="text" placeholder="Поиск"/>
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
						<h2 class="kat">Категория</h2>
						<div class="category">
                <ul>
                  <li><a href="processors.php" title="Процессоры">Процессоры</a></li>
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
				</div>

        <div class="qw7">
          <div class="content">
            <div class="form">
              <h2>processors Add</h2>
            <form action="admin.php" method="post" enctype="multipart/form-data">
              <input type="text" name="vender" placeholder="Введите производителя"> <br>
              <input type="text" name="model" placeholder="Введите модель"> <br>
              <input type="text" name="core" placeholder="Введите количество ядер"> <br>
              <input type="text" name="year" placeholder="Введите год"> <br>
              <input type="file" name="img" placeholder="Изображение"> <br>
              <input type="submit" name="sub" value="Подтвердить">
            </form>
            </div>
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
              <li><a href="#">О форуме</a></li>
              <li><a href="#">Связь с админом</a></li>
              <li><a href="#">FAQ’s</a></li>
            </ul>
							</ul>
						</div>
					</div>
					</div>
	</footer>
</body>
</html>
<?php else: exit; ?>
<?php endif; ?>

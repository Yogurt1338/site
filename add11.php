<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="sort">
                   <form action="" method="POST">
                     <p>Сортировка по:    </p>
                      <ul>
                        <li> <a href="add11.php?sort=price-asc"> по цене</a> </li>
                        <li> <a href="add11.php?sort=score-desc"> по оценке </a> </li>
                      </ul>
                 </div>
                 <?php

                 $sorting = $_GET["sort"];
                 switch ($sorting)
                 {
                   case 'price-asc';
                   $sorting = 'price ASC';
                   $sort_name = 'По цене';
                   break;

                   case 'score-desc';
                   $sorting = 'score DESC';
                   $sort_name = 'По оценке';
                   break;
                 }

          $mysql4 = new mysqli('localhost','root','','productsdb');
            $result4 ="SELECT * FROM `products` ORDER BY $sorting";

              $result5 = mysqli_query($mysql4, $result4);


              if($result5)
               $proc = "";
                while($proc = $result5->fetch_assoc()){

  echo "<table>";
    echo "<tr>";
    echo "<td>".$proc["type"]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Производтель: ".$proc["vender"]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Модель: ".$proc["model"]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Цена: ".$proc["price"]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Описание: ".$proc["descr"]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Оценка ".$proc["score"]."</td>";
    echo "</tr>";

        echo "</table>";
}
        //  mysqli_free_result($result4);
          mysqli_close($mysql4);


                  ?>
</body>
</html>










<?php
//  $Vender = filter_var(trim($_POST['vender']), FILTER_SANITIZE_STRING);
//  $Model = filter_var(trim($_POST['model']), FILTER_SANITIZE_STRING);
  //$Price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
//  $Type = filter_var(trim($_POST['type']), FILTER_SANITIZE_STRING);
//  $Descr = filter_var(trim($_POST['descr']), FILTER_SANITIZE_STRING);
//  $Score = filter_var(trim($_POST['score']), FILTER_SANITIZE_STRING);
//  $Image = addslashes(file_get_contents($_FILES['img']['tmp_name']));

//  $mysql4 = new mysqli('localhost','root','','productsdb');
//  $mysql4 ->query("INSERT INTO `products` (`type`, `vender`, `model`, `price`, `descr`, `score`,`img`)
//  VALUES('$Type', '$Vender', '$Model', '$Price', '$Descr', '$Score','$Image')");

//  $mysql4->close();
// header('Location: sem11add.php');




 ?>

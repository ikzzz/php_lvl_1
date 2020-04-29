<?php
  include_once 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Фотогалерея</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Фотогалерея</h1>
  </header>
  <div class="images">
    <table>
  <tr>
    <?
    $sql = "SELECT * FROM `gallery` WHERE `URL` LIKE '%small%' ORDER BY `views` DESC";
    $photo = mysqli_query($connect,$sql);
    while($images = mysqli_fetch_assoc($photo)){
        if ($r==3){ 
                    echo "</tr><tr>"; $r=0;
                  }
          echo "<td><a href=\"fullimg.php?ID=".$images['ID']."\"><img src=".$images['URL']."></a><br>Просмотров:".$images['views']."</td>";
                    $r++;
    }
  ?>
  </div>
</table>
<?php
  include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Фотогалерея</title>
</head>
<body>
  <a href="index.php"> Назад </a>
  <div>
    <?
    $id = $_GET['ID'];
    $sql = "SELECT * FROM `gallery` WHERE `ID`=$id"  ;
    $full = mysqli_query($connect,$sql);
    while($image = mysqli_fetch_assoc($full)){
    echo "<img src=\"img/full/".$image['NAME']."\"><br>";
    	$views = $image['views'];
    	$views++;
	}
	$sql = "UPDATE `gallery` SET `views`=$views WHERE `ID`=$id";
	$seen = mysqli_query($connect,$sql);
	echo "Количество просмотров:".$views;
 ?>
  </div>
</body>
</html>

<!DOCTYPE HTML>
<html lang="ru">
<head>
     <meta charset = "UTF-8">
</head>
<body>
     <h1>Калькулятор - 2</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="x" value="<?=$_POST['x']?>">
     <input type="text" name="y" value="<?=$_POST['y']?>">
     <p>
     <input type="submit" name="plus" value="+">
     <input type="submit" name="minus" value="-">
 	 </p>
     <input type="submit" name="multiply" value="*">
     <input type="submit" name="divide" value="/">
<?
$x = $_POST['x'];
$y = $_POST['y'];
if (isset($_POST['plus'])){
	$res = $x + $y;
	};
if (isset($_POST['minus'])){
	 $res = $x - $y; 
	};
if (isset($_POST['multiply'])){ 
	$res = $x * $y;
	};
if (isset($_POST['divide'])){ 
	if ($x == 0 || $y == 0){
          $res="операция не возможна";
    }
    else $res = $x / $y; };
?>
 = <?=$res?>
</form>
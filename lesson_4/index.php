<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="center">
<h1 align="center">Фотогалерея</h1>

<?php
$files = scandir("images");
?>
<table>
	<tr>
<?
for($i=2,$r=0; $i<count($files);$i++, $r++):
	if ($r==3){ 
		echo "</tr><tr>"; $r=0;} ?>
    <td><a href="bigimg.php?page=<?= $files[$i]?>"><img src="images/<?= $files[$i]?>" width="300px"></a></td>
<?php
endfor;
$bigImg = $_GET['page'];
?>
</table>
</div>
</body>
</html>

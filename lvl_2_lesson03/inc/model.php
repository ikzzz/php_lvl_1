<?php
  include_once 'configs/config.php';
 

 function getAllImages($connect){
 	$sql = "SELECT * FROM `gallery` WHERE `URL` LIKE '%small%' ORDER BY `views` DESC";
    $result = mysqli_query($connect,$sql);
    return $result;
 };

 function getOneImages($connect, $id){
 	$sql = "SELECT * FROM `gallery` WHERE `ID`=$id"  ;
 	$result = mysqli_query($connect,$sql);
 	return $result;
};

function updateViews($connect, $views, $id){
	$sqli = "UPDATE `gallery` SET `views`=$views WHERE `ID`=$id";
	$result = mysqli_query($connect,$sqli);
	return $result;
};
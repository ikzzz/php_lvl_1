<?php
  include_once 'templates/config.php';
  	if($_GET['action']=='dell'){
    $id_cart = $_GET['id'];
    $count = 1;

    $dell = "DELETE FROM `basket` WHERE `basket`.`id` = $id_cart";
    $result = mysqli_query($connect, $dell);
    if(!$result){
        die(mysqli_error($link));
    }else{
        header("Location: index.php?page=basket");
    }
}
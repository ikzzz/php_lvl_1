<?php
  include_once 'templates/config.php';
    if($_GET['action']=='addbasket'){
    $id_good = $_GET['id'];
    $id_user = $_COOKIE['userid'];
    $count = 1;

    $add = "INSERT INTO basket (id_good, count, id_user) VALUES ('$id_good','$count','$id_user')";
    $result = mysqli_query($connect, $add);
    if(!$result){
        die(mysqli_error($link));
    }else{
        header("Location: index.php?page=catalog");
    }
}
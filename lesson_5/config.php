<?php
  CONST SERVER = "localhost";
  CONST DB = "foto";
  CONST LOGIN = "root";
  CONST PASS = "";
  $connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");
?>
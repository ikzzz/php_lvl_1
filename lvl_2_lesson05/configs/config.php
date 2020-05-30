<?php
define("MYSQL_SERVER","localhost");
define("MYSQL_USER","root");
define("MYSQL_PASSWORD","");
define("MYSQL_DB","my_shop");

define("DIR_BIG","images/big_img/");
define("DIR_SMALL","images/small_img/");



$link = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB) or die("Error: ".mysqli_error($link));
if(!mysqli_set_charset($link, "utf8")){
    printf("Error: ".mysqli_error($link));
}

/*
session_start();
require_once "config.php";

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('MYSQL_DB','catalog');
define('DB_DRIVER','mysql'); 
define('SERVER_PORT','3301');//порт по умолчанию 3306, у меня почему-то, этот кровопийца 3301 был.
try
{	
$connect_str = DB_DRIVER.':host='.DB_SERVER.';port='.SERVER_PORT.';dbname='.MYSQL_DB;
$options = [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
    ];
$db = new PDO($connect_str,DB_USER,DB_PASS,$options);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	die("Error: ".$e->getMessage());
}*/
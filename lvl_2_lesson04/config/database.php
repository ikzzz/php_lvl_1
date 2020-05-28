<?php
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
}
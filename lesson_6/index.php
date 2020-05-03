<?php
  include_once 'templates/config.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>магазин носков</title>
  <link rel="stylesheet" href="style/style.css">
    <!--<script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>  --> 
</head>
<body>
  <header>
  <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Магазин носков</div>
        <div id="navWrap">
  <a href="/">
                Главная
            </a>
            <a href="index.php?page=catalog">
                Каталог
             </a>
        </div>
    </div>
</header>	
  <?
   $page = $_GET['page'];
    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'catalog') {
        require('templates/catalog.php');
   } elseif ($page == 'product') {
        $id = $_GET['id'];
        $opengood = [];
        $sql = "SELECT * FROM `goods`";
   		$goods = mysqli_query($connect,$sql);
    	while($good = mysqli_fetch_assoc($goods)){
    	};
        foreach ($goods as $product) {
            if ($product['ID'] == $id) {
                $opengood = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }
?>
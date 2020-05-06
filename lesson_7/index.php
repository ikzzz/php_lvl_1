<?php
  include_once 'templates/config.php';
  include_once 'templates/addbasket.php';
  include_once 'templates/dell.php';

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
             <a href="index.php?page=basket">
                Корзина
             </a>
             <!--ниже код ссылки войти/выйти, выйти не получается никак, поэтому закоментил-->
              <!--<? if (isset($_COOKIE['login'])) {
                echo "<a href=\"index.php?page=unsignet\"> 
                Выйти
                </a>";}
                else{ echo "<a href=\"index.php?page=signet\">
                Войти
                </a>, или 
               <a href=\"index.php?page=reg\">
                Зарегистрироваться
                </a>";}?>-->
                 <a href="index.php?page=signet">
                Войти
                 </a>
                 <a href="index.php?page=reg">
                Регистрация
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
      }
      elseif ($page == 'basket') {
        require('templates/basket.php');
      }
      elseif ($page == 'signet') {
        require('auth.php');
      }
      //elseif ($page == 'unsignet') {
      //  require('unsignet.php');
      //}
      elseif ($page == 'reg') {
        require('reg.php');
      }
      elseif ($page == 'product') {
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
    };
    
?><?//endif;?>
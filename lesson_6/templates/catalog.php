<?php
  include_once 'templates/config.php';
 ?>
<h1>
    Каталог товаров
</h1>
<!--ID 	name 	pic_name 	desc 	small_img 	big_img 	price 	count-->
<!--								ширина 300	ширина 800					-->

<div>
	<?
    $sql = "SELECT * FROM `goods`";
    $goods = mysqli_query($connect,$sql);
    while($good = mysqli_fetch_assoc($goods)){
    };
  ?>
    <?php foreach ($goods as $good): ?>
        <div class="shopUnit">
            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <img src="<?php echo $good['small_img']; ?>"/>
            <div class="shopUnitShortDesc">
                <?php echo $good['desc']; ?>
            </div>
            <div class="shopUnitPrice">
                Цена: <?php echo $good['price']; ?>
            </div>
            <a href="index.php?page=product&id=<?php echo $good['ID']; ?>" class="shopUnitMore">
                Подробнее
            </a>
        </div>
    <?php endforeach; ?>
</div>
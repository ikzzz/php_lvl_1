<?php
  include_once 'templates/config.php';
 ?>
<h1>
    Корзина
</h1>
<div>
	<?
   $id_user = $_COOKIE['userid'];
	 $action = $_GET['action'];
      if ($action == 'dell') {
        require('templates/dell.php');
      };
    $sql = "SELECT * FROM `basket` WHERE `id_user`= $id_user";
    $carts = mysqli_query($connect,$sql);
    while($good = mysqli_fetch_assoc($carts)){
    };
  	foreach ($carts as $cart): ?>
                <? $idGood= $cart['id_good'];
                   $goodSQL = "SELECT * FROM `goods` WHERE `ID`=$idGood";
    			   $goodsInfo = mysqli_query($connect,$goodSQL);
    				while($goodInfo = mysqli_fetch_assoc($goodsInfo)):?>
                		<?php echo $goodInfo['name']; ?>
           	 			<div class="shopUnitShortDesc">
                			<?php echo $goodInfo['desc']; ?>
           				</div>
            			<div class="shopUnitPrice">
                		    Цена: <?php echo $goodInfo['price']; $onePrice = $goodInfo['price']; ?>
            			</div>
            		<?php endwhile;?>
           					  
                Количество: <?php echo $cart['count']; $oneCount = $cart['count'];  ?>
                <a href="index.php?action=dell&id=<?php echo $cart['id']; ?>" class="shopUnitMore">Удалить</a>
                <br>
            	<?
            	$onePrice = $onePrice * $oneCount;
            	$allBuyPrice = $allBuyPrice + $onePrice;
         		?>
        </div>
    <?php endforeach; ?>
    <div class="shopUnitPrice">
                		    Итоговая стоймость: <?php echo $allBuyPrice; ?>
            			</div>
    <a href="index.php?action=buy&id=<?php echo $cart['id_user']; ?>" class="shopUnitMore">Оформить заказ</a>
                <br>
</div>

<div id="openedProduct-img">
    <img src="<?php echo $opengood['big_img']; ?>">
</div>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">
        <?php echo $opengood['name']; ?>
    </h1>
    <div id="openedProduct-desc">
        <?php echo $opengood['desc']; ?>
    </div>
    <div id="openedProduct-price">
        Цена: <?php echo $opengood['price']; ?>
        <a href="index.php?action=addbasket&id=<?php echo $opengood['ID']; ?>" class="shopUnitMore">Купить</a>
    </div>
</div>

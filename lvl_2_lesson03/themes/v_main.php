<?php
/**
 * Основной шаблон
 * ===============
 * $title - заголовок
 * $content - HTML страницы
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$title?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div id="header">
		<h1><?=$title?></h1>
	</div>
  </header>
  <div id="content">
		<?=$content?>
	</div>
<div id="footer">
		Все права защищены. Адрес. Телефон.
</div>
</body>
</html>

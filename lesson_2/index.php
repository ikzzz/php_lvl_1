<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php 
	$a="title";
	$b="a";
	$yaer = date("Y");
	$h_one = "h1"; 
	$h_two = "h2";
	$h_three = "h3";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<?php echo "<$a>  minimalistica </$a>" ?>
</head>
<body>
	<div id="content">
		<?php echo "<$h_one>Такой вот сайт</$h_one>" ?>
		
		<ul id="menu">
			<li><?php echo "<$b href=\"#\">home</$b>" ?></li>
			<li><?php echo "<$b href=\"#\">archive</$b>" ?></li>
			<li><?php echo "<$b href=\"#\">contact</$b>" ?></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<?php echo "<$h_two> <$b href=\"#\">Nunc commodo euismod massa quis vestibulum</$b> </$h_two>" ?>
				<p class="info">posted 3 hours ago in <?php echo "<$b href=\"#\">general</$b>" ?></p>
			
			</div>
			<div class="body">
				<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<?php echo "<$h_three><$b href=\"#\">Ut enim risus rhoncus</$b></$h_three>" ?>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <?php echo "<$b href=\"#\">read more</$b>" ?></p>
		</div>
		<div class="col">
			<?php echo "<$h_three><$b href=\"#\">Maecenas iaculis leo</$b></$h_three>" ?>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <?php echo "<$b href=\"#\">read more</$b>" ?></p>
		</div>
		<div class="col last">
			<?php echo "<$h_three><$b href=\"#\">Quisque consectetur odio</$b>
			</$h_three>" ?>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <?php echo "<$b href=\"#\">read more</$b>" ?></p>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; <?= "$yaer" ?> <em>minimalistica</em> &middot; Design: Luka Cvrk, <?php echo "<$b href=\"http://www.solucija.com/\" title=\"Free CSS Templates\">Solucija</$b>" ?></p>
		</div>	
	</div>
</body>
</html>
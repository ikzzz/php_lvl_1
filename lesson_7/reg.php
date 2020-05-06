
<?php
if($_GET['success'] && $_COOKIE['login']):?>
    <h1>Вы успешно зарегистрировались!<? echo $_COOKIE['login']?></h1>
<?php
endif;
?>

<div id="openedProduct-content">
<form method="post" action="reg_server.php">
    <p>Логин</p>
    <input type="text" name="login" value="<?= $_COOKIE['login']?>">
    <p>Пароль</p>
    <input type="password" name="pass" value="<?= $_COOKIE['pass']?>"><br><br>
    <input type="submit" value="Регистрация">
</form>
</div>
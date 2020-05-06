<?php
include_once 'templates/config.php';
$login = (!empty($_POST['login'])) ? strip_tags($_POST['login']) : "";
$pass = (!empty($_POST['pass'])) ? strip_tags($_POST['pass']) : "";
$sql = "select id from user where login='$login' and pass = '$pass'";
$res = mysqli_query($connect,$sql) or die("Error:".mysqli_error($connect));
if(mysqli_num_rows($res)>0){
    setcookie("login",$login);
    setcookie("pass",$pass);
    while($usersID = mysqli_fetch_assoc($res)){
    	$userID = $usersID['id'];
    };
    setcookie("userid",$userID);
    header("Location: index.php?success=true");
}
else {
    header("Location: index.php?success=false");
}


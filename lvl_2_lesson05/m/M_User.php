<?
require_once "configs/config.php";
include_once('m/model.php');

class M_User {
	function auth($login,$pass){
		/*$link = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB) or die("Error: ".mysqli_error($link));
		if(!mysqli_set_charset($link, "utf8")){
   		 printf("Error: ".mysqli_error($link));
		}
	    $login = $_POST['login'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT id FROM user WHERE login='$login' AND pass = '$pass'";
    	$res = mysqli_query($link,$sql) or die("Error:".mysqli_error($link));
    	if(mysqli_num_rows($res)>0){
        	setcookie("login",$login);
        	setcookie("pass",$pass);
        	while($usersID = mysqli_fetch_assoc($res)){
        		$userID = $usersID['id'];
        	};
        	$getUserName = getOne($link, $userID, 'user');
        	$userName = $getUserName['name'];
        	setcookie("userid",$userID);
        	setcookie("username",$userName);
        	header("Location: index.php");
    	}
    	else {
    	$info = '<font color="red">Неверный логин или пароль</font>';
    	}

		/*
		$query = "SELECT * FROM user WHERE login = :login AND pass = :pass";

		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->bindValue(":pass", $pass, PDO::PARAM_STR);
		$stmt->execute();


		$res = $stmt->fetch(PDO::FETCH_ASSOC);


		if(!empty($res)) {
			header("Location: /cabinet");
		} else {
			return false;
		}
*/
	}
}
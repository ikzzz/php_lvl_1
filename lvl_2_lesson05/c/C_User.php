<?php//// Êîíòòðîëëåð ñòðàíèöû ÷òåíèÿ.//include_once('m/M_User.php');class C_User extends C_Base{	//	// конструктор?	//	/*	public function action_auth(){		$this->title .= '::вход на сайт';        $user = new M_User();		$info = "Добро пожаловать ";        if($_POST){            $login = $_POST['login'];            $info = $user->auth("login","pass");		    $this->content = $this->Template('v/v_auth.php', array('text' => $info));		}		else{		   $this->content = $this->Template('v/v_auth.php');		}				}*/public function action_auth(){		$this->title .= '::вход на сайт';		$info = 'Введите логин и пароль';		if($_POST){        	$user = new M_User();				$link = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB) or die("Error: ".mysqli_error($link));			if(!mysqli_set_charset($link, "utf8")){   		 		printf("Error: ".mysqli_error($link));			}	    	$login = $_POST['login'];			$pass = md5($_POST['pass']);			$sql = "SELECT id FROM user WHERE login='$login' AND pass = '$pass'";    		$res = mysqli_query($link,$sql) or die("Error:".mysqli_error($link));    		if(mysqli_num_rows($res)>0){        		setcookie("login",$login);        		setcookie("pass",$pass);        		while($usersID = mysqli_fetch_assoc($res)){        			$userID = $usersID['id'];        		};        		$getUserName = getOne($link, $userID, 'user');        		$userName = $getUserName['name'];        		setcookie("userid",$userID);        		setcookie("username",$userName);        		header("Location: index.php");    		}    		else {    		$info = '<font color="red">Неверный логин или пароль</font>';    		}    	}    	$this->content = $this->Template('v/v_auth.php', array('text' => $info));}	public function action_logout(){		$this->title .= ' вы вышли';		$info = "досвидания ";        setcookie("login","",time()-3600,"/");		setcookie("pass","",time()-3600,"/");		setcookie("userid","",time()-3600,"/");		setcookie("username","",time()-3600,"/");		header('Location: index.php');	}	}
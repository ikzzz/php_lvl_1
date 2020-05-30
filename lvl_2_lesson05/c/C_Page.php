<?php
//
// Êîíòòðîëëåð ñòðàíèöû ÷òåíèÿ.
//
include_once('m/model.php');

class C_Page extends C_Base
{
	//
	// Êîíñòðóêòîð.
	//
	
	public function action_index(){
		$this->title .= '::главная';
		$text = text_get();
		//$today = date();
		$this->content = $this->Template('v/v_index.php', array('text' => $text));	
	}
	
    
	public function action_edit(){
		$this->title .= 'Редактирование';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', array('text' => $text));		
	}
	public function action_lk(){
		$this->title .= '  Личный кабинет';
		
		$link = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB) or die("Error: ".mysqli_error($link));
			if(!mysqli_set_charset($link, "utf8")){
   		 		printf("Error: ".mysqli_error($link));
			}

		$title = 'Личный кабинет';
		$userId = $_COOKIE['userid'];
		$userInfo = getOne($link, $userId, 'user');

		$info ='Ваш e-mail: '.$userInfo['email'].'<br> ваш логин: '.$userInfo['login'];
		
		$this->content = $this->Template('v/v_lk.php', array('info' => $info));		
	}
}
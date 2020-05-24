<?php
  include_once 'inc/model.php';
  include_once 'inc/view.php';

    $title = 'Фотогалерея';
    $id = $_GET['ID'];
    $onePic = getOneImages($connect, $id);

// Внутренний шаблон.
$content = view_include(
  'themes/v_fullimg.php',
  array('pic' => $onePic));
   
// Внешний шаблон.
$page = view_include(
  'themes/v_main.php', 
  array('title' => $title, 'content' => $content));

// Вывод.
echo $page;
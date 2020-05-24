<?php
  include_once 'inc/model.php';
  include_once 'inc/view.php';

// Информация для отображения.
$title = 'Фотогалерея';
$img = getAllImages($connect);

// Внутренний шаблон.
$content = view_include(
  'themes/v_index.php',
  array('pic' => $img));
   
// Внешний шаблон.
$page = view_include(
  'themes/v_main.php', 
  array('title' => $title, 'content' => $content));

// Вывод.
echo $page;
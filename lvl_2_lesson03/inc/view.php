<?php
//
// Подключение шаблона.
//
function view_include($fileName, $vars = array())
{
	// Установка переменных для шаблона.
	foreach ($vars as $k => $v)
	{
		$$k = $v;
	}

	// Генерация HTML в строку.
	ob_start();
	include $fileName;
	return ob_get_clean();	
}


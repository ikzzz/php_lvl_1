<?php

# Задание 1

$i=1;
while($i<=100){
        if ($i % 3 == 0) {
        	echo "$i", " ";
        }
        $i++;
}
?><hr><?

# Задание 2

$i = 0;
do {
	if($i == 0){
		$message = $i." - ноль";
	}
	if($i%2 == 0 && $i > 0){
		$message = $i." - четное число";
	}
	if ($i % 2 == 1 && $i >0) {
		$message = $i." - нечетное число";}
	echo "$message <br>";
	$i++;
} while ( $i <= 10);

?><hr><?

# Задание 3

$russia =  ["Московская область" => [
									"Москва",
									"Красногорск",
									"Химки",
									"Балашиха",
									"Красногорск",
									"Королёв",
									"Подольск",
									],
			"Ленинградская область" => [
									"Санкт-Петербург", 
									"Всеволожск", 
									"Павловск",
									"Кронштадт",
									],			
			"Рязанская область" => [
									"Рязань", 
									"Касимов", 
									"Ряжск",
									"Михайлов",
									"Шацк",
									],
];
foreach($russia as $obl => $city){
    	$c =":".implode(", ",$city);
    	echo "$obl"."$c", "<br>";
}

?><hr><?


# Задание 4

function trans($rus){
$arrTranslit = ["а" =>"a", "и" =>"i", "т" =>"t", "ъ" =>" ",
				"б" =>"b", "к" =>"k", "у" =>"u", "ы" =>"i",
				"в" =>"v", "л" =>"l", "ф" =>"f", "ь" =>"'",
			  	"г" =>"g", "м" =>"m", "х" =>"h", "э" =>"e",
				"д" =>"d", "н" =>"n", "ц" =>"c", "ю" =>"yu",
				"е" =>"e", "о" =>"o", "ч" =>"ch", "я" =>"ya",
				"ё" =>"e", "п" =>"p", "ш" =>"sh",
				"ж" =>"zh", "р" =>"r", "щ" =>"sh",
				"з" =>"z", "с" =>"s", "й" =>"j",
];
echo "$rus", "<br>"; 
$rus = strtr($rus, $arrTranslit);
return $rus;
}
echo trans('машина');

?><hr><?


# Задание 5

function tire($word){
$arrTire = ["_" => " ",
];
echo "$word", "<br>"; 
$word = strtr($word, array_flip($arrTire));
return $word;
}
echo tire('м а ш и н а');

?><hr><?

# Задание 7

for($i=0; $i<=9; print $i, $i++){
}; 

?><hr><?

# Задание 8

$russian =  ["Московская область" => [
									"Москва",
									"Красногорск",
									"Химки",
									"Балашиха",
									"Красногорск",
									"Королёв",
									"Подольск",
									],
			"Ленинградская область" => [
									"Санкт-Петербург", 
									"Всеволожск", 
									"Павловск",
									"Кронштадт",
									],			
			"Рязанская область" => [
									"Рязань", 
									"Касимов", 
									"Ряжск",
									"Михайлов",
									"Шацк",
									],
];
foreach($russian as $oblasti){
	foreach ($oblasti as $citys) {
		if (mb_substr("$citys", 0, 1) == 'К') {
		echo "$citys","<br>";
		}
	}
}

?><hr><?


# Задание 9

function translit($rusl){
$arrTr = ["a" =>"а", "i" =>"и", "t" =>"т", "'" =>"ъ",
		  "b" =>"б", "k" =>"к", "u" =>"у", "i'" =>"ы",
		  "v" =>"в", "l" =>"л", "f" =>"ф", "''" =>"ь",
		  "g" =>"г", "m" =>"м", "h" =>"х", "e" =>"э",
		  "d" =>"д", "n" =>"н", "c" =>"ц", "yu" =>"ю",
		  "e" =>"е", "o" =>"о", "ch" =>"ч", "ya" =>"я",
		  "e" =>"ё", "p" =>"п", "sh" =>"ш", "_" =>" ",
		  "zh" =>"ж", "r" =>"р","sh'" =>"щ",
		  "z" =>"з", "s" =>"с", "j" =>"й",
];
echo "$rusl", "<br>"; 
$rusl = strtr($rusl, array_flip($arrTr));
return $rusl;
}
echo translit('ни о чем не жалей');

?><hr><?
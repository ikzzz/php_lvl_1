<?php

//З а д а н и е  1

$a=31;
$b=30;
if ($a>=0 && $b>=0) {
	$c=$a-$b;
}
	elseif ($a<0 && $b<0) {
		$c=$a * $b;
	}
	elseif ($a >= 0 && $b < 0 || $a<0 && $b>=0) {
		$c = $a + $b;
	}
echo "$c <hr>";

//З а д а н и е  2

$a=rand(0,15);
switch ($a) {
	case 0:
			echo "$a "; $a++;
	case 1:
			echo "$a "; $a++;
	case 2:
			echo "$a "; $a++;
	case 3:
			echo "$a "; $a++;
	case 4:
			echo "$a "; $a++;
	case 5:
			echo "$a "; $a++;
	case 6:
			echo "$a "; $a++;
	case 7:
			echo "$a "; $a++;
	case 8:
			echo "$a "; $a++;
	case 9:
			echo "$a "; $a++;
	case 10:
			echo "$a "; $a++;
	case 11:
			echo "$a "; $a++;
	case 12:
			echo "$a "; $a++;
	case 13:
			echo "$a "; $a++;
	case 14:
			echo "$a "; $a++;
	case 15:
			echo "$a <hr>";
	break;
	}

//З а д а н и е  3

function sum($a=0,$b=0){
        return $a + $b;
    }
echo sum(2,2)," ";

function umnozh($a=0,$b=0){
        return $a * $b;
    }
echo umnozh(2,2), " ";

function razn($a=0,$b=0){
        return $a - $b;
    }
echo razn(2,2), " ";

function del($a=0,$b=0){
	if ($a > 0 && $b > 0 || $a < 0 && $b <0 ) { 
		return $a/$b;
	}
	else{
	return 0;
	} 
}
echo del(2,0), "<hr>";

//З а д а н и е  4

function mathOperation($a, $b, $operation){
	switch ($operation) {
		case "del":
			return del($a, $b);
			break;
		case "sum":
			return sum($a, $b);
			break;
		case "razn":
			return razn($a, $b);
			break;
		case "umnozh":
			return umnozh($a, $b);
			break;		
	}
}
echo mathOperation(4,2,"del"),"<br>";
echo mathOperation(4,2,"sum"),"<br>";
echo mathOperation(4,2,"razn"),"<br>";
echo mathOperation(4,2,"umnozh"),"<hr>";


//З а д а н и е  6

function power($val, $pov) {
  if ($pov == 0) {
    return 1;
  }
  if ($pov < 0) {
    return power(1/$val, -$pov);
  }
  return $val * power($val, $pov-1);
}
echo power(5, 2), "<hr>";


//З а д а н и е  7

function hours($h,$m){
	if ($h == 0 || $h >= 5 && $h <= 20) {
		$h_postfix = "часов";
	}
	if ($h == 21 || $h == 1) {
		$h_postfix = "час";
	}
	if ($h >= 2 && $h <= 4 || $h >= 22 && $h <= 24) {
		$h_postfix = "часa";
	}
	if ($m == 0 || $m >= 5 && $m <= 20 || $m >= 25 && $m <= 30 || $m >= 35 && $m <= 40 || $m >= 45 && $m <= 50 || $m >= 55 && $m <= 60) {
		$m_postfix = "минут";
	}
	if ($m == 1 || $m == 21 || $m ==  31 || $m == 41 || $m == 51){
		$m_postfix = "минута";
	}
	if ($m >= 2 && $m <= 4 || $m >= 22 && $m <= 24 || $m >=  32 && $m <= 34 || $m >=  42 && $m <= 44 || $m >=  52 && $m <= 54 ){
		$m_postfix = "минуты";
	}
	return $h.$h_postfix.$m.$m_postfix;
}
$h = date("H");
$m = date("i");

echo hours($h,$m);

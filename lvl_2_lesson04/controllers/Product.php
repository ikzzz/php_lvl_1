<?php
include_once "../models/Model.php";
//require_once "../config/database.php";

//$num = goods_num_row(`goods`);
$numRowA = $db->query('SELECT * FROM `goods`');
$numRow = $numRowA->fetchAll(PDO::FETCH_ASSOC);
$num = count($numRow);

if (isset($_POST['nextGoods'])){
    $element = $_POST['element'];
    if($element < $num - 4){
        $element = $element + 4;
    }
    elseif($element = $num - 4){
    	$d = $num - $element;
    	$element = $element + $d;
    };
}
else {$element = 4;
};
//goods[] = getAll(`goods`, $element);
$result = $db->query("SELECT * FROM `goods` order by 'id' desc LIMIT 0,{$element}");
while($row = $result->fetch())
	{
		$goods[]= $row;
	};
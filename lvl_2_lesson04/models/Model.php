<?php
require_once "../config/database.php";
// не получилось запустить PDO через фукции
function getAll($table, $element)
{
    $result = $db->query("SELECT * FROM {$table} order by 'id' desc LIMIT 0,{$element}");
while($row = $result->fetch())
    {
        $goods[]= $row;
    };

    return $goods;
}

function goods_num_row($table)
{   
    $numRowA = $db->query('SELECT * FROM {$table}');
    $numRow = $numRowA->fetchAll(PDO::FETCH_ASSOC);
    $num = count($numRow);
    return $num;
}
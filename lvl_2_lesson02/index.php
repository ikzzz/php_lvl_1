<?php
spl_autoload_register(function ($className){
    include "$className.php";
});
$goodOne = new oneGood('Штучный товар',100, 10);
echo $goodOne->print_data();

$goodCrumbly = new crumblyGood('Товар на вес',1000, 10, 10);
echo $goodCrumbly->print_data();

$goodDigital = new digitalGood('Товар цифровой носитель',150, 50);
echo $goodDigital->print_data();//не получается разобраться, как перекинуть переменную из класса oneGood в digitalGood


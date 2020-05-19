<?php
trait SingletonTrait
{
	private static $goodInfo;

	public static function getGoodInfo()
	{
		if (empty(self::$goodInfo)) self::$goodInfo = new static();

		return self::$goodInfo;
	}

	private function __construct()
	{
	}
}
class addGood
{
	use SingletonTrait;

	private $arrGood = [];

	public function addParametr($parametr)
	{
		$this->arrGood[] = $parametr;
	}

	public function getParametr()
	{
		return $this->arrGood;
	}
}


echo '<pre>'; 
$foo1 = addGood::getGoodInfo();
$foo1->addParametr('Штучный товар');
$foo1->addParametr('Цена: 500');
$foo1->addParametr('Количество: 10 шт.');
print_r($foo1->getParametr());
$foo2 = addGood::getGoodInfo();
$foo2->addParametr('Цвет: синий');
$foo2->addParametr('Цвет: черный');
$foo2->addParametr('Цвет: белый');
print_r($foo1->getParametr()); 
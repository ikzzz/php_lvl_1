<?
spl_autoload_register(function ($className){
    include "$className.php";
});

Class digitalGood extends goods{
	 
	 public function __construct($type, $price, $firstprice) {
        parent::__construct($type, $price, $firstprice);
        $this->kolichestvo = $kolichestvo;
        $price=$price/2;//не получается разобраться, как перекинуть переменную из класса oneGood в digitalGood
        $this->firstprice=$firstprice;
		$total=$price-$this->firstprice;
		$this->total=$total;
    }
};
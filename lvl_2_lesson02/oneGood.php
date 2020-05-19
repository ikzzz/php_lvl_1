<?
spl_autoload_register(function ($className){
    include "$className.php";
});

Class oneGood extends goods{
	 
	 public function __construct($type, $price, $firstprice) {
        parent::__construct($type, $price, $firstprice);
        $this->firstprice = $firstprice;
		$total=$price-$this->firstprice;
		$this->total=$total;
    }
};
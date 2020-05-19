<?
spl_autoload_register(function ($className){
    include "$className.php";
});

Class crumblyGood extends goods{
	 
	 public function __construct($type, $price, $firstprice, $kolichestvo) {
        parent::__construct($type, $price, $firstprice);
        $this->kolichestvo = $kolichestvo;
        $price=$price*$this->kolichestvo;
        $this->firstprice=$firstprice*$this->kolichestvo;
		$total=$price-$this->firstprice;
		$this->total=$total;
		echo 'количество'.$kolichestvo. ', ';
    }

};
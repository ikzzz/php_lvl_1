<?

class Sox
{
	protected $name;
	protected $price;
	function __construct($name,$price)
	{
		$this->name = $name;
        $this->price = $price;
	}
	function view(){
        echo "Носок: ".$this->name.", стоит: ".$this->price." рублей, <br>";
    }
}
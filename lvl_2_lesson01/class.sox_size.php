<?
include "class.sox_structure.php";
	class SoxSize extends Structure{
    private $size;

    function __construct($name, $price,$structure,$size)
    {
        parent::__construct($name, $price,$structure);
        $this->size = $size;
    }

    function view()
    {
       parent::view();
       echo ", размер: ".$this->size;
    }
}
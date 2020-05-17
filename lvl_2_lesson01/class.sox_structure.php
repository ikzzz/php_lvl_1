<?
include "class.sox.php";
class Structure extends Sox{
    private $structure;

    function __construct($name, $price,$structure)
    {
        parent::__construct($name, $price);
        $this->structure = $structure;
    }

    function view()
    {
       parent::view();
       echo " состав: ".$this->structure;
    }
}
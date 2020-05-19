<?php
abstract class Goods{
    private $type;
    private $price;
    public function __construct($type, $price, $firstprice) {
        $this->type = $type;             //типа товара
        $this->price = $price;           //конечная уена с наценкой
        $this->firstprice = $firstprice; //первоначальная стоймость, для расчета дохода с продажи
    }

    public function print_data(){
        $info = 'Тип товара: ' . $this->type . '<br>' .
                'Цена за шт.: ' . $this->price . '<br>' .
                'Доход с продаж при себестоймости в ' .$this->firstprice.' : ' . $this->total . '<br><br>';
        return $info;
    }
}
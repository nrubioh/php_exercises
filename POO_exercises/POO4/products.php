<?php
class Products
{
    public $strDescription;
    public $fltPrice;
    protected $intMinStock = 10;
    protected $strStatus = "Active";

    public function __construct(string $description, float $price)
    {
        $this->strDescription = $description;
        $this->fltPrice = $price;
    }
    public function getInfoProduct()
    {
        $arrayProduct = array(
            'Product' => $this->strDescription,
            'Price' => $this->fltPrice,
            'Minimum Stock' => $this->intMinStock,
            'Status' => $this->strStatus
            );
        return $arrayProduct;
    }
} //end class product
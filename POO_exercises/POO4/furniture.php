<?php
require_once("products.php");

class Furniture extends Products //now you can access to property and methods in products.php
{
    public $strColor;
    public $strMaterial;
    protected $strStatus = 'Sold-Out';

    function __construct(string $description, float $price, string $color, string $material)
    {
        parent::__construct($description, $price); //just there are two property in C.Products
        $this->strColor = $color;
        $this->strMaterial = $material;
    }

    public function getInfoProduct()
    {
        $arrayProduct = array(
            'Product' => $this->strDescription,
            'Price' => $this->fltPrice,
            'Minimum Stock' => $this->intMinStock,
            'Status' => $this->strStatus,
            'Color' => $this->strColor,
            'Material' => $this->strMaterial 
            );
        return $arrayProduct;
    }
} //end class furniture
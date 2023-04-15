<?php
require_once("furniture.php");

class Tables extends Furniture
{
    private $strShape = "";
    protected $strSize;
    
    public function __construct(string $description, float $price, string $color, string $material, string $size) // not Shape because is private 
    {
        parent::__construct($description, $price, $color, $material); //size isn`t parent method
        $this->strSize = $size;
    }
    public function setShape(string $shape)
    {
        $this->strShape = $shape;
    }
    public function getInfoProduct()
    {
        $arrayProduct = array(
            'Product' => $this->strDescription,
            'Price' => $this->fltPrice,
            'Minimum Stock' => $this->intMinStock,
            'Status' => $this->strStatus,
            'Color' => $this->strColor,
            'Material' => $this->strMaterial,
            'Size' => $this->strSize,
            'Shape' => $this->strShape
            );
        return $arrayProduct;
    }
}//end class table
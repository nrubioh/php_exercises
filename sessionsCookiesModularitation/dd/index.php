<?php
require ("vendor/autoload.php");

class Meow
{
    protected $paws = [];
    protected $color;

    public function __construct(string $whatColor) {
        $this->color = $whatColor;
        for ($i=0; $i < 4; $i++) 
            $this->paws[$i] = new MeowPaws(); 
    }
}
class MeowPaws{
    protected $nails = 5;
    protected $description = "kitty with spots :3";

    public function get_description():string{
        return $this->description;
    }
}

$catHouse = array(
    "name" => "Antotens House", 
    "location" => [
        "country" => "Chile",
        "city" => "Santiago",
        "commune" => "Las Condes",
        "number" => 5632
    ],
    "number_of_cats" => 3,
    "cats" => [
        new Meow("white"),
        new Meow("black"),
        new Meow("brown")
    ]
);

/* echo "<pre>";
var_dump($catHouse);
echo "</pre>"; */
dd($catHouse);
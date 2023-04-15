<?php
    require_once("tables.php");

    $objBed = new Products("Bed",599.99);
    $arrayInfobed = $objBed->getInfoProduct();
    echo "<pre>";
    print_r ($arrayInfobed);
    echo "</pre>";

    $objFurniture = new Furniture("closet",899.90,"red","wood");
    $arrayInfoFurniture = $objFurniture->getInfoProduct();
    echo "<pre>";
    print_r ($arrayInfoFurniture);
    echo "</pre>";

    $objTables = new Tables("Bed",1659.99,"blue","wood","small");
        $objTables->setShape("Rectangular 3.5mts");
    $arrayInfoTables = $objTables->getInfoProduct();
    echo "<pre>";
    print_r ($arrayInfoTables);
    echo "</pre>";
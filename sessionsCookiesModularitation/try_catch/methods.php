<?php
/**
 * result is == D1 and that return of D2 -> D3
 */
function division3(){
    return 20598/0;
}

function division2(){
    return division3();
}

function division1(){
    return division2();
}

try {
    $result = division1();
    echo $result;
} catch (\Throwable $e) {
    echo $e->getMessage()."\n"; // division by zero
    echo $e->getCode()."\n"; // 0 
    echo $e->getFile()."\n"; // C:\xampp\htdocs\phpExcersices\sessionsCookiesModularitation\try_catch\methods.php
    echo $e->getLine()."\n"; // 4 (line)

    echo "<pre>";
    echo var_dump($e->getTrace()); //trace == "rastro/marca"
    echo "</pre>";
                                        //ANSWER:
/* <pre>array(3) {
    [0]=>
    array(4) {
        ["file"]=>
        string(81) "C:\xampp\htdocs\phpExcersices\sessionsCookiesModularitation\try_catch\methods.php"
        ["line"]=>
        int(8)
        ["function"]=>
        string(9) "division3"
        ["args"]=>
        array(0) {
        }
    }
    [1]=>
    array(4) {
        ["file"]=>
        string(81) "C:\xampp\htdocs\phpExcersices\sessionsCookiesModularitation\try_catch\methods.php"
        ["line"]=>
        int(12)
        ["function"]=>
        string(9) "division2"
        ["args"]=>
        array(0) {
        }
    }
    [2]=>
    array(4) {
        ["file"]=>
        string(81) "C:\xampp\htdocs\phpExcersices\sessionsCookiesModularitation\try_catch\methods.php"
        ["line"]=>
        int(16)
        ["function"]=>
        string(9) "division1"
        ["args"]=>
        array(0) {
        }
    }
    }
    </pre> */
}

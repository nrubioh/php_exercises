<?php
print_r($_REQUEST);

$words=array("sun","moon","sky");

if ($_REQUEST["w0"] == $words[0]) {
    echo "the word is correct"."\n";
} else {
    echo "the word is incorrect"."\n";
};

if ($_REQUEST["w1"] == $words[1]) {
    echo "the word is correct"."\n";
} else {
    echo "the word is incorrect"."\n";
};

if ($_REQUEST["w2"] == $words[2]) {
    echo "the word is correct"."\n";
} else {
    echo "the word is incorrect"."\n";
};
?>
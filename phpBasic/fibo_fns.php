<?php
$num_terms = 10;
$term1 = 0;
$term2 = 1;
echo $term1 . " " . $term2 . " "; // it will print 0 & 1

// Iterate over the remaining terms of the Fibonacci series
for ($i = 2; $i < $num_terms; $i++) {
  $next_term = $term1 + $term2;
  echo $next_term . " "; //1 2 3 5 8 13 21 34

  // Update the values of the previous terms for the next iteration
  $term1 = $term2;
  $term2 = $next_term;
}
echo "\n";
//-----------------------
function sum($a=0,$b=0){
    echo 'the sum of a + b is :'.$a+$b. "\n";
}
$numbers = [1,50]; // to create a var with array 
sum(...$numbers); // extract the files
echo "\n";
//-----------------------
function arraySum(...$terms){
    $summation = 0;
    foreach ($terms as $summationTerms) {
        $summation += $summationTerms;
    }
    echo "The summation is: $summation";
}
arraySum(2,6,599,1);
echo "\n";
//-----------------------
function YESvNO($points){
    if ($points >= 100){
        echo 'its: yes'."\n";
    } else {
        echo 'its: no'."\n";
    }
}
do {
    YESvNO((int)readline('how many points are you gonna write?: '));
} while (true);

?>
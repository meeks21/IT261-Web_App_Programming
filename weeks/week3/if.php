<?php
//if statements

//if(there is a condition) {
// do something
//  }

// $temp = '75';

// if($temp <= 60) {
//     echo 'It\'s not too hot';
// } else {
//     echo 'It could be hot';
// }


$temp = '80';

if($temp <= 60) {
    echo 'It\'s not too hot';
} elseif ($temp <= 70){
    echo 'It\'s getting warmer';
} elseif($temp <= 80){
    echo 'It\'s getting really hot';
} else {
    echo 'And the temperature is unknown!';
}

$salary = '200000';

if($salary == 200000) {
    echo 'I\'m happy';
}

//my salary is still 200000. If I make quota 800000, i will then make 10% of my salary as bonus. What will be my total salary.
//If I make only 750,000, then I will only make 5% bonus
//If I make only 500,000, i dont make any bonus
$sales = 800000;

if($sales <= 500000){
    $salary *= 1;
    echo $salary;
} elseif($sales <= 750000){
    $salary *= 1.05;
    echo $salary;
} elseif($sales >= 800000){
    $salary *= 1.10;
} else{
    echo 'No bonus';
}
<?php

// $a = 20;
// $b = 30;
// $c = $a + $b;
// echo $c;
// echo '<br>';

// $a = 20;
// $b = 30;
// $c = $a - $b;
// echo $c;
// echo '<br>';

// $a = 20;
// $b = 30;
// $c = $a * $b;
// echo $c;
// echo '<br>';

// below is an assignment operator

$money = 100;
$money /= 7;
//rounding down = floor(); floor function
//rounding up = ceil(); ceil function
$moneyFriendly = floor($money);
$moneyFriendly = ceil($money);
echo '<br>';
echo '<br>';
echo $money;
echo '<br>';
echo $moneyFriendly;

//logic - arithmetic calculations
//circumference of a circle C = 2 \pi r
echo '<br>';
$radius = 10;
$pi = 3.14;
$circumference = (2 * $pi) * $radius;
echo $circumference;

//22 degrees celcius = how much fahrenheit (0°C × 9/5) + 32 = 32°F
echo '<br>';
$celcius = 14;
$fahrenheit = ($celcius * 9/5) + 32;
$fahFriendly = floor($fahrenheit);
echo '<br>';
echo $fahrenheit;
echo '<br>';
echo $fahFriendly;

// currency!!!! canada --- what is the exchange rate
echo '<br>';
// $canada = 100;
// $exchange = .79;
// $american = $canada * $exchange;
// echo $american;

$canada = 100;
$canada *= .79;
echo $canada;
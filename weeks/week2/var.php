<?php

$name = 'Kemar';
echo 'It is a rainy and windy day! ';
echo '<br>';
$name = 'Frank';
$name = 'Bob';
echo $name; 

echo '<br>';
$firstName = 'Kemar';
$lastName = 'Meeks';
echo $firstName. ' ' .$lastName;

//Single quotes vs double quotes!!! 

echo '<br>';
echo '<br>';
echo ' '.$firstName.' ';
echo '<br>';
echo "$firstName";

echo '<br>';

$name = 'Kemar';
$name .= ' Antonio';
echo $name;

echo '<br>';
$x = 20;
$y = 25;
$z = $x + $y;
echo $z;
echo '<br>';

$x = 20;
$x += 25;
echo $x;
echo '<br>';

$a = 100;
$a /= 7;
$aFriendly = number_format($a, 2);

echo $a;
echo '<br>';
echo $aFriendly;
echo '<br>';
echo date('Y');
echo '<br>';

// $name[] = 'Olga';
// $name[] = 'Nha';
// $name[] = 'Hank';
// $name[] = 'Daetri';
// $name[] = 'Zach';

// echo '<br>';
//Below are indexed arrays
$dairy[] = 'milk';
$dairy[] = 'cheese';
$dairy[] = 'ice cream';
$dairy[] = 'yogurt';
echo $dairy[2];
echo '<br>';
print_r($dairy);
echo '<br>';
var_dump($dairy);
echo '<br>';
// $nav[] = 'Home';
// $nav[] = 'About';
// $nav[] = 'Daily';
// $nav[] = 'Contact';
// $nav[] = 'Gallery';
// echo $nav[2];
echo '<br>';
// you cannot echo an array!

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
print_r($nav);

$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
];



$show = 'Vikings';
$showActor = 'Alexander Ludwig';
$showGenre = 'historical fiction';

echo '<br>';
echo '<br>';
echo 'A show that I am currently watching is '.$show.', and one of the stars of the show is '.$showActor.'. '.$show.' is a '.$showGenre.'.';

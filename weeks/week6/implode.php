<?php

$wines = array('Cab', 'Merlot', 'Syrah', 'Malbec');

// echo $wines; cannot echo and array

// print_r($wines);

$myWines = implode(', ', $wines);

echo $myWines;

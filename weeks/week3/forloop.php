<?php
//for loop

//the celcius formula
//far = (celcius * 9/5) + 32

// $celcius = 14;
// $far = ($celcius * 9/5) + 32;

// echo $far;
// For this FOR LOOP, you cannot use the $celcius variable outside of the loop!!!
for($celcius = 0; $celcius <=100; $celcius+=5){
    $far = ($celcius * 9/5) + 32;
    echo ''.$celcius.' &nbsp; &nbsp; '.$far.' <br>';
}

echo $celcius;
//miles and kilometers extra credit
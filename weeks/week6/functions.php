<?php 


function sayHello(){
    echo 'Hello PHP Function';
}

sayHello(); //calling the function
echo '<br>';

function sayHello2($name){
    echo'Hello '.$name.'';
}

sayHello2('Kemar');
echo '<br>';
sayHello2('Jan');
echo '<br>';
sayHello2('June');
echo '<br>';

function sayHello3($name, $age){
    echo'Hello '.$name.', and you are '.$age.' years old';
}

sayHello3('Kemar', 32);
echo '<br>';
sayHello3('Jan', 45);
echo '<br>';
sayHello3('June', 55);
echo '<br>';
echo '<h2>Math problems</h2>';

function cube($n){
    $cubing = $n * $n * $n;
    echo $cubing;
}

cube(15);

echo '<h2>Celcius Converter</h2>';

function celsiusConverter($temp){
    $far = ($temp * 9/5) + 32;
    echo $far;
}

celsiusConverter(5);

echo '<h2>Area and volume math problem</h2>';

function areaVolume($value1, $value2, $value3){
    $area = $value1 * $value2;
    $volume = $value1 * $value2 * $value3;

    return array($area, $volume);// you cannot return two arguments
}

$result = areaVolume(10, 5, 2);//how do we echo the array???
echo '<b>Area :</b> '.$result[0].'';
echo '<br>';
echo '<b>Volume :</b> '.$result[1].'';
echo '<br>';

function areaVolume2($value1a, $value2a, $value3a){
    $area2 = $value1a * $value2a;
    $volume2 = $value1a * $value2a * $value3a;

    return array($area2, $volume2);// you cannot return two arguments
}

list($myArea, $myVolume) = areaVolume2(10, 5, 2);
echo $myArea;
echo '<br>';
echo $myVolume;
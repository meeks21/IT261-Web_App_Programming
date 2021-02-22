<?php


$dice = rand(1, 6);
echo $dice;
echo '<br>';


$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
// echo '<br>';
// echo $dice1;
// echo $dice2;


if ($dice1 == $dice2){
    echo 'You win, you have a double!';
}else{
    echo 'You lose!!!';
}

$photos = array('photo1','photo2','photo3','photo4','photo5');

$nav['index.php'] = 'Home';

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(1, 4);
$selectedImage = 'images/'.$photos[$i].'.jpg';

echo '<img src="'.$selectedImage.'" alt="'.$photos[$i].'">';
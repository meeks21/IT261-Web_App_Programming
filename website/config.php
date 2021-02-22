<?php

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $nav['../index.php'] = 'Home';
    $nav['../adder.php'] = 'Troubleshooting';
    $nav['daily.php'] = 'Daily';
    $nav['calculator-index.php'] = 'Calculator';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Website Project Home Page';
    $body = 'home';
    break;

    case 'daily.php':
    $title = 'Daily Entree';
    $body = 'daily';
    $banner = '../images/bistro-banner.jpg';
    break;

    case 'calculator-index.php':
    $title = 'Website Project Home Page';
    $body = 'home';
    $banner = '../images/techbanner2.jpg';
    break;
    
    case 'contact.php':
    $title = 'Emailable Form';
    $body = 'home';
    $banner = '../images/email_banner.jpg';
    break;   

}


//Form Config for contact.php

// creating empty variables
$name='';
$email='';
$phone='';
$genre='';
$numDays='';
$agree='';

$nameErr='';
$emailErr='';
$phoneErr='';
$genreErr='';
$numDaysErr='';
$agreeErr='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(empty($_POST['name'])){
        $nameErr = 'Please enter your name';
    }else {
        $name = $_POST['name'];
    }
    if(empty($_POST['email'])){
        $emailErr = 'Please enter your email';
    }else {
        $name = $_POST['name'];
    }
    if(empty($_POST['phone'])){
        $nameErr = 'Please enter your phone number';
    }else {
        $name = $_POST['name'];
    }
    if(empty($_POST['name'])){
        $nameErr = 'Please enter your name';
    }else {
        $name = $_POST['name'];
    }
    if(empty($_POST['name'])){
        $nameErr = 'Please enter your name';
    }else {
        $name = $_POST['name'];
    }
    if(empty($_POST['name'])){
        $nameErr = 'Please enter your name';
    }else {
        $name = $_POST['name'];
    }



}
<?php

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['people.php'] = 'People';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {

    case 'index.php':
    $title = 'Website Project Home Page';
    $body = 'home';
    $banner = '../images/techbanner2.jpg';
    break;

    case 'daily.php':
    $title = 'Daily Entree';
    $body = 'daily';
    $banner = '../images/bistro-banner.jpg';
    break;

 
    
    case 'contact.php':
    $title = 'Emailable Form';
    $body = 'home';
    $banner = '../images/email_banner.jpg';
    break; 
    
    case 'thx.php':
    $title = 'Thank You!';
    $body = 'home';
    $banner = '../images/email_banner.jpg';
    break; 

    default:
    $body = 'home';
    $title = 'Our Website';
    $banner = '../images/techbanner2.jpg';

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
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])){
        $phoneErr = 'Please enter your phone number';
    }else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['genre'])){
        $genreErr = 'Please select at least one genre';
    }else {
        $genre = $_POST['genre'];
    }

    if($_POST['numDays'] == 'NULL'){
        $numDaysErr = 'Please select the number of days you wish to attend';
    }else {
        $numDays = $_POST['numDays'];
    }

    if(empty($_POST['agree'])){
        $agreeErr = 'Do you agree?';
    }else {
        $agree = $_POST['agree'];
    }

    //Phone error format
    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phoneErr = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
        
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phoneErr = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
    }





    function myGenres() {
        
        $myreturn = '';
        // if my genre array is not empty, implode it
        if(!empty($_POST['genre'])){
            $myReturn = implode(', ', $_POST['genre']); 
        } return $myReturn;

    }

    if(isset($_POST['name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['genre'],
            $_POST['numDays'],
            $_POST['agree'])) {

                $to = 'oszemeo@mystudentswa.com';
                $subject = 'Emailable Form Test Email '.date('m/d/y');
                $body = 'Name: '.$name.''.PHP_EOL.
                'Email: '.$email.''.PHP_EOL.
                'Phone: '.$phone.''.PHP_EOL.

                ''.$name.' interested in learning: '.myGenres().''.PHP_EOL.
                //use the function myGenres to return the items in the array

                'Number days '.$name.' can take lessons: '.$numDays.''.PHP_EOL.
                'A representative will contact you shortly';


                $headers = array(
                    
                    'From' => 'no-reply@kemar-meeks.com',
                    'Reply-to' => ' '.$email.' ',
                    
                );



                if($_POST['name'] !== '' &&
                $_POST['email'] !== '' &&
                $_POST['phone'] !== '' &&
                preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])&&
                $_POST['genre'] !== '' &&
                $_POST['numDays'] !== 'NULL' &&
                $_POST['agree'] !== '') {
               
                    mail($to, $subject, $body, $headers);
                    header('location:thx.php');

                }




                
    }


}
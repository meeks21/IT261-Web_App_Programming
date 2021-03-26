<?php //config.php file

// this will be our config file that we will link to the credentials.php
ob_start(); //prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); // We want to see our errors

include('credentials.php');

/**********************************************************
 *      Switch for nav bar and page configuration
 * 
 *********************************************************/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['countries.php'] = 'Countries';
    $nav['contact.php'] = 'Contact';
    

switch(THIS_PAGE) {

    case 'index.php':
    $title = 'Home Page';
    break;

    case 'daily.php':
    $title = 'Daily Page'; 
    break;

    case 'about.php':
    $title = 'About Page';
    break;

    case 'countries.php':
    $title = 'Countries Page';
    break;

    case 'countries-view.php':
    $title = 'Delicious Ramen';
    break;
 
    
    case 'contact.php':
    $title = 'Emailable Form';
    break; 
    
    case 'thx.php':
    $title = 'Thank You!';
    break; 

    default:
    $title = 'Our Website';


}
/*****************************************************************
 *      Switch for daily page
 * 
 ****************************************************************/
date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){

    case 'Monday':
        
        $pic = 'images/munich.jpg';
        $alt = 'munich';
        $city = 'Munich';
        $content = '';
        
    break;

    case 'Tuesday':
        
        $pic = 'images/bangkok.jpg';
        $alt = 'bangkok';
        $city = 'Bangkok';
        $content = '';
        
    break;

    case 'Wednesday':
        
        $pic = 'images/prague.jpg';
        $alt = 'prague';
        $city = 'Prague';
        $content = '';
        
    break;

    case 'Thursday':
        
        $pic = 'images/puerto-vallarta.jpg';
        $alt = 'puerto-vallarta';
        $city = 'Puerto Vallarta';
        $content = '';
        
    break;

    case 'Friday':
        
        $pic = 'images/montreal.jpg';
        $alt = 'montreal';
        $city = 'Montreal';
        $content = '';
        
    break;

    case 'Saturday':
        
        $pic = 'images/auckland.jpg';
        $alt = 'auckland';
        $city = 'Auckland';
        $content = '';
        
    break;

    case 'Sunday':
        
        $pic = 'images/buenos-aires.jpg';
        $alt = 'buenos-aires';
        $city = 'Buenos Aires';
        $content = '';
        
    break;

}
/*****************************************************************
                         form.php config

******************************************************************/

//declaring variables
$name='';
$email='';
$phone='';
$travel='';
$numDays='';
$agree='';

$nameErr='';
$emailErr='';
$phoneErr='';
$travelErr='';
$numDaysErr='';
$agreeErr='';

// error messgaes
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

    if(empty($_POST['travel'])){
        $travelErr = 'Please select at least one destination';
    }else {
        $travel = $_POST['travel'];
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





    function myTravel() {
        
        $myreturn = '';
        // if my travel array is not empty, implode it
        if(!empty($_POST['travel'])){
            $myReturn = implode(', ', $_POST['travel']); 
        } return $myReturn;

    }

    if(isset($_POST['name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['travel'],
            $_POST['numDays'],
            $_POST['agree'])) {

                $to = 'szemeo@mystudentswa.com';
                $subject = 'Final Project | Thank You Olga!!! '.date('m/d/y');
                $body = 'Name: '.$name.''.PHP_EOL.
                'Email: '.$email.''.PHP_EOL.
                'Phone: '.$phone.''.PHP_EOL.

                ''.$name.' is interested in visiting the following: '.myTravel().''.PHP_EOL.
                //use the function myTravel to return the items in the array

                'Length of '.$name.' stay in each country : '.$numDays.''.PHP_EOL.
                'A representative will contact you shortly';


                $headers = array(
                    
                    'From' => 'no-reply@kemar-meeks.com',
                    'Reply-to' => ' '.$email.' ',
                    
                );



                if($_POST['name'] !== '' &&
                $_POST['email'] !== '' &&
                $_POST['phone'] !== '' &&
                preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])&&
                $_POST['travel'] !== '' &&
                $_POST['numDays'] !== 'NULL' &&
                $_POST['agree'] !== '') {
               
                    mail($to, $subject, $body, $headers);
                    header('location:thx.php');

                }




                
    }


}













//This code snippet needs to be at teh bottom of the page
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
}
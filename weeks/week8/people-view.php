<?php //people-view.php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM week8People WHERE week8PeopleId = '.$id.'';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)or 
die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row=mysqli_fetch_assoc($result)){
       $firstName = stripslashes($row['firstName']);
       $lastName = stripslashes($row['lastName']); 
       $email = stripslashes($row['email']);  
       $occupation = stripslashes($row['occupation']);
       $birthDate = stripslashes($row['birthDate']);  
       $description = stripslashes($row['description']);
       $feedback = '';
    }

} else {

    $feedback = 'Nobody\'s Home';
} //closing else


// LOTS OF PHP
//include('includes/header.php');



?>


<h1>WE have made it - here we are!</h1>
<h2>You are on <?php echo $firstName;?>'s Page</h2>
<?php

    if($feedback == '') {
        echo '<ul>';
            echo '<li><b>First Name:</b> '.$firstName.'</li>';
            echo '<li><b>Last Name:</b> '.$lastName.'</li>';
            echo '<li><b>Occupation:</b> '.$occupation.'</li>';
            echo '<li><b>Email:</b> '.$email.'</li>';
            echo '<li><b>Birthdate:</b> '.$birthDate.'</li>';
        echo '</ul>';
            echo '<p>'.$description.'</p>';
            echo '<p><a href="people.php">Return to our People Page</a></p>';


    } else {
        echo $feedback;
    }

    //dont forget you are in the html land!

     // releaseing the web server
 mysqli_free_result($result);

 // close the connection
 mysqli_close($iConn);
?>

<!-- dont forget you are in html land -->
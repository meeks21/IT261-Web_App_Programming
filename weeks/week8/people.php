<?php


include('config.php');
//include('includes/header.php');

// we need to connect to the database!!!

$sql = 'SELECT * FROM week8People';
 
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)or 
die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

 if(mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)){

        //this array is going to display the contents of your row
        echo '<ul>';
        echo '<li>For more information <a href="people-view.php?id='.$row['week8PeopleId'].'">'.$row['firstName'].'</a></li>';
        echo '<li><b>First Name</b> '.$row['firstName'].'</li>';
        echo '<li><b>Last Name</b> '.$row['lastName'].'</li>';
        echo '<li><b>Occupation</b> '.$row['occupation'].'</li>';
        echo '</ul>';

    } //end while loop
 } else {

    echo 'Nobody Home';

 } // close if mysqli num rows


 // releaseing the web server
 mysqli_free_result($result);

 // close the connection
 mysqli_close($iConn);
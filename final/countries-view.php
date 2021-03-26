<?php


session_start();
include('config.php');


if(!isset($_SESSION['userName'])){
    $_SESSION['msg'] = 'You must login first';

    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['userName']);
    header('location:login.php');
}

// 
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else{
    header('Location:countries.php');
}

$sql = 'SELECT * FROM Countries WHERE countryID ='.$id.'';

$db =  mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($db, $sql) or die(myError(__FILE__,__LINE__,mysqli_connect_error($db)));

if(mysqli_num_rows($result) > 0){

    while($row=mysqli_fetch_assoc($result)){
        $countryName = stripslashes($row['countryName']);
        $costOfLiving = stripslashes($row['costOfLiving']);
        $englishSpeakers = stripslashes($row['englishSpeakers']);
        $appealingTo = stripslashes($row['appealingTo']);
        $benefits = stripslashes($row['benefits']);
        $drawbacks = stripslashes($row['drawbacks']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }

} else {

    $feedback = 'Nobody is home - they are out to lunch';
}

include('includes/header.php')
?>

<!-- notifaction message -->
<?php
if(isset($_SESSION['success'])) :?>
<div class="success">
    <h3> <?php echo $_SESSION['success']; 
        unset($_SESSION['success']);
    ?>
    </h3>
</div>
    <?php endif;
     
if(isset($_SESSION['userName'])) :?>
<div class="welcome-logout">
    <h3>Hello, <?php echo $_SESSION['userName'];?></h3>
    <a href="index.php?logout='1'">Log out</a>
</div>
    <?php endif;?>
<main>
<h1 class="center">Welcome to <?php echo $countryName; ?> </h1>
<?php
    if($feedback == '') {
        echo'<img class="countrypic" src="images/country'.$id.'.jpg" alt="'.$countryName.'"';
        echo '<p>'.$description.'</p>';
    } else {
        echo $feedback;
    }


    mysqli_free_result($result);

    mysqli_close($db);
?>

</main>
<aside>

<?php
    if($feedback == '') {
        echo '<ul>';
        echo '<li><b>Cost of Living:</b> ' .$costOfLiving.'</li>';
        echo '<li><b>Number of enlish speakers: </b>' .$englishSpeakers.'</li>';
        echo '<li><b>Appeals:</b> ' .$appealingTo.'</li>';
        echo '<li><b>Benefits:</b> ' .$benefits.'</li>';
        echo '<li><b>Drawbacks:</b> ' .$drawbacks.'</li>';
        echo '</ul>';
        echo '<p><a href="countries.php">Return to Countries page </a></p>';
    }else{
        echo $feedback;
    }
?>
</aside>
</div> 
<!-- end of wrapper -->

<?php include('includes/footer.php');?>
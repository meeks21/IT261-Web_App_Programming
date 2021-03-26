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
    header('Location:login.php');
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

<h1 class="center title_h1">10 countries that are easy for Americans to move to! </h1> 
<main>
<img src="images/spain.jpg"> 

</main>

<aside>
    <p>For more information </P>
    <?php
        //connect to the database

    $sql = 'SELECT * FROM Countries';

    $db =  mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($db, $sql) or die(myError(__FILE__,__LINE__,mysqli_connect_error($db)));


    if(mysqli_num_rows($result) > 0){

        while($row=mysqli_fetch_assoc($result)){

            // this array is going to display the contents of your row
           
            echo '<ul>';
            echo '<li><a href="countries-view.php?id='.$row['countryID'].'">'.$row['countryName'].'</a></li>';

            echo '</ul>';



        }//ending while loop

    } else {

        echo 'Nobody home';

    }

    //releasing the web server
    mysqli_free_result($result);

    mysqli_close($db);
    ?>
</aside>









</div> 
<!-- end of wrapper -->

<?php include('includes/footer.php');?>
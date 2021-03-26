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

include('includes/header.php')
?>

<!-- notifaction message -->
<?php
if(isset($_SESSION['success'])) :?>
<div class="success">
    <h4> <?php echo $_SESSION['success']; 
        unset($_SESSION['success']);
    ?>
    </h4>
</div>
    <?php endif;
     
if(isset($_SESSION['userName'])) :?>
<div class="welcome-logout">
    <h3>Hello, <?php echo $_SESSION['userName'];?></h3>
    <a href="index.php?logout='1'">Log out</a>
</div>
    <?php endif;?>

<h1 class="center title_h1">Tables! </h1>
<main class="home-main">
    <h3>User Table</h3>
    <img src="images/usertable.PNG" alt="user_table">
    <h3>Country Table</h3>
    <img src="images/countrytable.PNG" alt="country_table">
</main>

</div> 
<!-- end of wrapper -->

<?php include('includes/footer.php');?>
<?php


session_start();
include('config.php');


if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must login first';

    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('location:login.php');
}

include('includes/header.php')
?>

<?php
if(isset($_SESSION['success'])) :?>
<div class="success">
    <h3> <?php echo $_SESSION['success']; 
        unset($_SESSION['success']);
    ?>
    </h3>
</div>
    <?php endif;
     
if(isset($_SESSION['UserName'])) :?>
<div class="welcome-logout">
    <h3>Hello, <?php echo $_SESSION['UserName'];?></h3>
    <a href="index.php?logout='1'">Log out</a>
</div>
    <?php endif;?>

<h1 class="center">Welcome to our home page </h1>

</div> 
<!-- end of wrapper -->

<?php include('includes/footer.php');?>
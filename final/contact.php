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
<h1 class="center title_h1">Sign up now! </h1>
<main>

<?php include('includes/form.php');?>
</main>
<aside>

</aside>
</div> 
<!-- end of wrapper -->

<?php include('includes/footer.php');?>
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

<h1 class="center title_h1">The city of the day is <?php echo $city;?></h1>
<main class="daily-main">
    <img src="<?php echo $pic;?>" alt="<?php echo $alt;?>">

</main>
<aside>
    <ul class="special-list">
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>            
    </ul>

</aside>
</div> 
<!-- end of wrapper -->

<?php include('includes/footer.php');?>
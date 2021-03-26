<?php


include('server.php');
include('includes/header.php');
?>

<h1 class="center">Login!</h1>

<form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>Username</label>
        <input type="text" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName'];?>">
        <label>Your Password</label>
        <input type="password" name="password">

        <?php include('includes/errors.php') ?>

        <button type="submit" class="btn" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>

    </fieldset>
</form>

</div>
<p class="center">Haven't Registered?<a href="register.php"> Register Here!</a></p>
<?php include('includes/footer.php');?>
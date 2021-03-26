<?php


include('server.php');
include('includes/header.php');
?>

<h1 class="center">Register Today</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<fieldset>
<label>First Name</label>
<input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>">
<label>Last Name</label>
<input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>">
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
<label>User Name</label>
<input type="text" name="userName" value="<?php if(isset($_POST['userName'])) echo htmlspecialchars($_POST['userName']);?>">

<label>Your Password</label>
<input type="password" name="password_1">

<label>Confirm Password</label>
<input type="password" name="password_2">

<button type="submit" class="btn" name="reg_user">Register</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Reset</button>

<?php include('includes/errors.php'); ?>

</fieldset>
</form>
<p class="center"><a href="login.php">Already a Member? Please Login</a></p>
</div>
<?php include('includes/footer.php');?>
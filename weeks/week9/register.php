<?php // My Register page - a simple form -- pointing to the server.php

include('server.php');
include('includes/header.php');

?>

<h1 class="center">Register Today</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <label>First Name</label>
    <input type="text" name="FirstName" value="<?php if(isset($_POST['FirstName'])) echo htmlspecialchars($_POST['FirstName']) ;?>">
    <label>Last Name</label>
    <input type="text" name="LastName" value="<?php if(isset($_POST['LastName'])) echo htmlspecialchars($_POST['LastName']) ;?>">
    <label>Email</label>
    <input type="email" name="Email" value="<?php if(isset($_POST['Email'])) echo htmlspecialchars($_POST['Email']) ;?>">
    <label>User Name</label>
    <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo htmlspecialchars($_POST['UserName']) ;?>">

    <label>Your Password</label>
    <input type="password" name="Password_1">

    <label>Confirm Password</label>
    <input type="password" name="Password_2">

    <button type="submit" class="btn" name="reg_user">Register</button>

    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'" >Reset</button>

    <?php 
        include('includes/errors.php');
    ?>
    
    </fieldset>



</form>
<p class="center"><a href="login.php">Already a Member?</a></p>
</div>
<?php include('includes/footer.php');?>
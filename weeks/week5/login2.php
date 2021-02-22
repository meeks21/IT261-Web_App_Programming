<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Second login form</title>
<style>

</style>

</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">
            <label>Are You a Member?</label>
            <ul>
                <li><input type="radio" name="confirm" value="yes"> Yes</li>
                <li><input type="radio" name="confirm" value="no"> No</li>
            </ul>
            <label>Your Password Please</label>
            <input type="password" name="password">
            <input type="submit" value="Confirm">
            <p><a href="">Reset</a></p>            
        </fieldset>
    </form>

<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['name'])) {
            echo 'Please fill out your name';
        }
        if(empty($_POST['confirm'])) {
            echo 'Are you a member?';
        }
        if(empty($_POST['password'])) {
            echo 'Please fill out your password';
        }
        if(isset($_POST['name'],
            $_POST['confirm'],
            $_POST['password'])){
                
                $name = $_POST['name'];
                $confirm = $_POST['confirm'];
                $password = $_POST['password'];

                if($confirm == 'yes'){
                    $yes = 'checked' ;
                } elseif($confirm == 'no') {
                    $no = 'checked';
                }

                if($confirm == 'yes' && $password == 'password') {
                    header('Location:index.php');
                } else{
                    header('Location:member.php');
                }

            }

    }//server request

?>

</body>
</html>
<?php // server page, which will be communicating with our database!!!! will be pointing to the config file
// session_start()
// mysqli_real_escape_string --- O'Brian
// md5()

session_start();

include('config.php');


//initialize the variables
$FirstName = '';
$LastName = '';
$Email = '';
$UserName = '';
$errors = array();
$success = 'You are now logged in!';

// connect to the database!!!
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user
if(isset($_POST['reg_user'])){
    //recieve the information
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);



    // array_push()

    if(empty($FirstName)) {
        array_push($errors, 'First name is required');
    }
    if(empty($LastName)) {
        array_push($errors, 'Last name is required');
    }
    if(empty($UserName)) {
        array_push($errors, 'Username is required');
    }
    if(empty($Email)) {
        array_push($errors, 'Email is required');
    }
    if(empty($Password_1)) {
        array_push($errors, 'Password is required');
    }
    if($Password_1 != $Password_2) {
        array_push($errors, 'Passwords do not match');
    }

    // start here check to see if there is a username and email

    $user_check_query = "SELECT * FROM Users WHERE UserName = '$UserName' OR Email ='$Email' LIMIT 1";

    $result = mysqli_query($db,$user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($db)));

    $user = mysqli_fetch_assoc($result);
    if($user){
    
        if($user['UserName'] == $UserName) {
            array_push($errors, 'Username already exist');
        }
        if($user['Email'] == $Email) {
            array_push($errors, 'Email already exist');
        }

    }// ending my big if statment re $user


    //if everything is okay and ther are no error, we need to now insert the data into the database

    if(count($errors) == 0){
        $Password = md5($Password_1);
    

    $query = "INSERT INTO Users (FirstName, LastName, UserName, Email, Password) VALUES ('$FirstName', '$LastName','$UserName','$Email', '$Password')";

    mysqli_query($db, $query);

        $_SESSION['UserName'] = $UserName;
        $_SESSION['success'] = $success;

        header('Location:login.php');
    }// count


}//close isset


if(isset($_POST['login_user'])){
    //recieve the information
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);


    if(empty($UserName)) {
        array_push($errors, 'Username is required');
    }

    if(empty($Password)) {
        array_push($errors, 'Password is required');
    }
    if(count($errors) == 0){
        $Password = md5($Password);

        $query = "SELECT * FROM Users WHERE UserName = '$UserName' AND Password = '$Password'";

        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results) == 1){
            $_SESSION['UserName'] = $UserName;
            $_SESSION['success'] = $success;

            header('Location:index.php');

        }else{
            array_push($errors, '<p class="red">Wrong Username/password combo!</p>');
        }
    }// close count

}//close isset
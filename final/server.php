<?php // server page, communicates with the database. will be pointing to the config file


/****** internal functions *******/
// session_start() 
// --- session variables are able to store user information that will be used across multiple pages
// mysqli_real_escape_string
// --- this functions escapes any appostrophes --- 0'Brian 
// mysqli_connect()
// md5() 
// --- encypts the password as a 32 character hexidecimal string

session_start();
//when using sessions the session function must always be at the top

include('config.php');

// initialize the variables

$firstName = '';
$lastName = '';
$email = '';
$userName = '';
$errors = array();
$success = 'You are now logged in';

// connect to the database

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));



// register the user

if(isset($_POST['reg_user'])) {

    //recieve the information from the name attributes in the form's input tags and assigns them to variables of the same name
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $userName = mysqli_real_escape_string($db, $_POST['userName']);

    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
    // arry_push()
    
    if(empty($firstName)) {
        array_push($errors, 'First name is required');
    }

    if(empty($lastName)) {
        array_push($errors, 'Last name is required');
    }

    if(empty($userName)) {
        array_push($errors, 'User name is required');
    }

    if(empty($email)) {
        array_push($errors, 'Email is is required');
    }

    if(empty($password_1)) {
        array_push($errors, 'password is required');
    }

    if($password_1 != $password_2) {
        array_push($errors, 'passwords do not match');
    }


    // checks datav for the username and email

    $user_check_query = "SELECT * FROM Users WHERE userName = '$userName' OR email ='$email' LIMIT 1 ";
    //double quotes work better when dealing with MySQL
    $result = mysqli_query($db, $user_check_query) or die(myError(__FILE__,__line__,mysqli_error($db)));

    $user = mysqli_fetch_assoc($result);

    if($user){

        if($user['userName'] == $userName) {
            array_push($errors, 'Username already exist');
        }

        if($user['email'] == $email) {
            array_push($errors, 'Username already exist');
        }

    }

    if(count($errors) == 0) {
        $password = md5($password_1);
    

    $query = "INSERT INTO Users (FirstName, LastName, Email, UserName, Password) VALUES('$firstName','$lastName','$email','$userName','$password')"; // queries the Users table and inserts the register  into the table

    mysqli_query($db,$query);

    $_SESSION['userName'] = $userName;
    $_SESSION['success'] = $success;

    header('Location:login.php');

    }//close count

}//close isset

/************************* checking that login.php is set ****************** */


if(isset($_POST['login_user'])) {

    //recieve the information from the name attributes in the form's input tags and assigns them to variables of the same name
    $userName = mysqli_real_escape_string($db, $_POST['userName']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($userName)) {
        array_push($errors, 'User name is required');
    }

    if(empty($password)) {
        array_push($errors, 'password is required');
    }

    if(count($errors) == 0) {
        $password = md5($password);
    

        $query = "SELECT * FROM Users WHERE UserName = '$userName' AND Password = '$password'";

        $results = mysqli_query($db,$query);

        if(mysqli_num_rows($results) == 1) {
            $_SESSION['userName'] = $userName;
            $_SESSION['success'] = $success;

            header('Location:index.php');
        } else {
            array_push($errors, 'Wrong username/password combo!');
        }

    }
}
<?php

    $firstName = '';
    $lastName = '';
    $email = '';
    $gender = '';
    $wines = '';
    $region = '';
    $comments= '';
    $agree = '';

    $firstNameErr = '';
    $lastNameErr = '';
    $emailErr = '';
    $genderErr = '';
    $winesErr = '';
    $regionErr = '';
    $commentsErr = '';
    $agreeErr = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //if someething was empty, echo the error
        //if a field is empty we are going to create an error variable
        if(empty($_POST['firstName'])) {
            $firstNameErr = 'Please enter your first name';
        }else {
            $firstName = $_POST['firstName'];
        }

        if(empty($_POST['lastName'])) {
            $lastNameErr = 'Please enter your last name';
        }else {
            $lastName = $_POST['lastName'];
        }

        if(empty($_POST['email'])) {
            $emailErr = 'Please enter email';
        }else {
            $email = $_POST['email'];
        }

        if(empty($_POST['gender'])) {
            $genderErr = 'Please check one';
        }else {
            $gender = $_POST['gender'];
        }

        if(empty($_POST['wines'])) {
            $winesErr = 'What, no wines...???';
        }else {
            $wines = $_POST['wines'];
        }

        if($_POST['region'] == 'NULL') {
            $regionErr = 'Please select your region';
        }else {
            $region = $_POST['region'];
        }

        if(empty($_POST['comments'])) {
            $commentsErr = 'How can we help you';
        }else {
            $comments = $_POST['comments'];
        }

        if(empty($_POST['agree'])) {
            $agreeErr = 'You must agree';
        }else {
            $agree = $_POST['agree'];
        }


        function myWines(){
            $myReturn = '';
            // if my wines array is not empty, implode it

            if(!empty($_POST['wines'])){
                $myReturn = implode(' ,', $_POST['wines']);
            } return $myReturn;
        }//close function


        if(isset($_POST['firstName'],
                $_POST['lastName'],
                $_POST['email'],
                $_POST['gender'],
                $_POST['wines'],
                $_POST['region'],
                $_POST['comments'],
                $_POST['agree'],)) {

                    $to = 'anthony.meeks3@gmail.com';
                    $subject = 'Test email for my form 1  '.date('m/d/y');
                    $body = 'First and Last Name: '.$firstName.' '.$lastName.''.PHP_EOL.'
                    Email is: '.$email.''.PHP_EOL.'
                    Gender is: '.$gender.''.PHP_EOL.'
                    Comments: '.$comments.''.PHP_EOL.'
                    Favorite Region: '.$region.''.PHP_EOL.'
                    Favorite Wines: '.myWines().'';

                    if($_POST['firstName'] !== '' &&
                    $_POST['lastName'] !== '' &&
                    $_POST['email'] !== '' &&
                    $_POST['wines'] !== '' &&
                    $_POST['comments'] !== '' &&
                    $_POST['agree'] !== '' &&
                    $_POST['region'] !== 'NULL'){
                    

                    

                    
                    mail($to, $subject, $body);
                    header('Location:thx.php');
                    }
                }//closing isset

    }//

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<h1>myWines() Function!</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <fieldset>
    <label>First Name</label>

    <input 
    type="text" 
    name="firstName" 
    value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>">
        <span class="err"><?php echo $firstNameErr;?></span>
    <label>Last Name</label>
    <input 
    type="text" 
    name="lastName"
    value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>">
        <span class="err"><?php echo $lastNameErr;?></span>
    <label>Email</label>
    <input 
    type="email" 
    name="email"
    value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="err"><?php echo $emailErr;?></span>
    <label>Gender</label>
    <ul>
        <li>
            <input 
            type="radio" 
            name="gender" 
            value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = checked';?>>Female
        </li>
        <li>
            <input 
            type="radio" 
            name="gender" 
            value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = checked';?>>Male
        </li>
        <li>
            <input 
            type="radio" 
            name="gender" 
            value="other"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked = checked';?>>Other
        </li>
    </ul>
        <span class="err"><?php echo $genderErr;?></span>
    <label>Favorite Wines</label>
    <ul>
        <li><input type="checkbox" name="wines[]" value="cab"<?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"' ;?>>Cabernet</li>
        <li><input type="checkbox" name="wines[]" value="merlot"<?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"' ;?>>merlot</li>
        <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"' ;?>>Syrah</li>
        <li><input type="checkbox" name="wines[]" value="malbec"<?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"' ;?>>Malbec</li>
        <li><input type="checkbox" name="wines[]" value="shiraz"<?php if(isset($_POST['wines']) && in_array('shiraz', $wines)) echo 'checked="checked"' ;?>>Shiraz</li>
    </ul>
    <span class="err"><?php echo $winesErr;?></span>
    <label> Regions</label>
    <select name="region">
        <option value="NULL"<?php if(isset($_POST['region']) && $_POST['region'] == 'NULL') echo 'selected = unselected';?>>Select One</option>
        <option value="nw"<?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected = selected';?>>Northwest</option>
        <option value="sw"<?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected = selected';?>>Southwest</option>
        <option value="mw"<?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected = selected';?>>Midwest</option>
        <option value="ne"<?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected = selected';?>>Northeast</option>
        <option value="south"<?php if(isset($_POST['region']) && $_POST['region'] == 'south') echo 'selected = selected';?>>South</option>

    </select>
    <span class="err"><?php echo $regionErr;?></span>
    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
    <span class="err"><?php echo $commentsErr;?></span>

    <label>Agree</label>
    <ul>
        <li><input type="radio" name="agree" value="agree"<?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked = checked';?>>Agree</li>
    </ul>
    <span class="err"><?php echo $agreeErr;?></span>
    <input type="submit" value="Send it!"> 
    <p><a href="">Reset</a></p>
    </fieldset>
</form>
</body>
</html>
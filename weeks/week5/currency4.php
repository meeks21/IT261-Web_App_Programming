<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style>

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    form{
        max-width: 600px;
        margin: 20px auto;
    }

    fieldset{
        padding: 10px;
    }

    label{
        display: block;
        margin-bottom: 5px;
    }
    
    input[type=text],
    input[type=email] {
        width: 100%;
        margin-bottom: 10px;
    }

    form ul {
        margin-left: 20px;
        list-style-type: none;
        margin-bottom: 10px;
    }

    .box {
        width:400px;
        margin: 20px auto;
        background: beige;
        padding: 10px;
    }

    select{
        margin-bottom: 10px;
        display: block;
    }

</style>

</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <label>How much money do you have?</label>
        <input type="text" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">
        <label>Choose your currency</label>
        <ul>
            <li><input type="radio" name="currency" value="0.013" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked == "checked"';?>>Rubles</li>
            <li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked == "checked"';?>>Canadian</li>
            <li><input type="radio" name="currency" value="1.28"<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked == "checked"';?>>Pounds</li>
            <li><input type="radio" name="currency" value="1.18"<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked == "checked"';?>>Euros</li>
            <li><input type="radio" name="currency" value="0.0094"<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked == "checked"';?>>Yen</li>
        </ul>

        <label>Banking Institution</label>
        <select name="bank">
            <option value="NULL"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'NULL') echo 'selected == "unselected"';?>> Select one!</option>
            <option value="boa"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected == "selected"';?>>Bank of America</option>
            <option value="chase"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected == "selected"';?>>Chase</option>
            <option value="becu"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected == "selected"';?>>Boeing Credit Union</option>
            <option value="mattress"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress') echo 'selected == "selected"';?>>Mattress</option>
        </select>

        <input type="submit" value="convert it">
        <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php

     if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['name'])) {
            echo '<p>Please fill out your name</p>';
        }

        if(empty($_POST['email'])) {
            echo '<p>Please fill out our email</p>';
        }

        if(empty($_POST['amount']) || !is_numeric($_POST['amount'])) {
            echo '<p>Show me the money or enter a number!!!</p>';
        }

        if(empty($_POST['currency'])) {
            echo '<p>Choose your currency </p>';
        } 
        
        if($_POST['bank'] == 'NULL'){
            echo 'Please choose your banking institution!';
        }

        if(isset($_POST['name'],
                    $_POST['email'],
                    $_POST['amount'],
                    $_POST['currency'],
                    $_POST['bank']) && 
                is_numeric($_POST['amount']) 
                // is_numeric($_POST['currency'])
                ) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];
            $total = $amount * $currency;
            $totalFormat = number_format($total, 2);
            
            // if the total is greater than or equal to something

            if($total >= 2000) {
                echo '<div class="box">';
                echo 'I\'m a happy camper, because I have '.$totalFormat.' American dollars and I am going shopping!!!';
                echo '</div>';
            } else {
                echo '<div class="box">';
                echo 'I\'m not happy because I only have '.$totalFormat.' American dollars!!!';
                echo '</div>';
            }

            // echo '<div class="box">';
            // echo '<h2>Hello '.$name.'</h2>'; 
            // echo '<p> You have $ '.$totalFormat.' American Dollars and we will be depositing it in '.$bank.'</p>';    
            // echo '<p>We will be sending you an email at <a href="mailto:'.$email.'">'.$email.'</a></p>';
            // echo '</div>';
              

            
     

     } // close server request method
     }
    ?>
</body>
</html>
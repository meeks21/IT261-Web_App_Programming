<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Celcius Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

    <!-- This global variable was used when we created the switch, when we created the THIS_PAGE constant -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <legend>Our Celcius Form</legend>
        <label>Enter your celcius value</label>
        <input type="text" name="cel">
        <input type="submit" value="Convert it!">
        <a href="">Reset</a>
    </fieldset>
    </form>
    <?php
        // f = (c * 9/5) + 32
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['cel'])) {

            $cel = $_POST['cel'];
            $far = ($cel * 9/5) + 32;
            if($far <= 32){
                echo '<p class="cool">'.$far.' is mighty cold</p>';
            } elseif($far <= 50){
                echo '<p class="not-cool">'.$far.' is not that cold</p>';
            } elseif ($far <= 80){
                echo '<p class="hot">'.$far.' is getting hot</p>';
            }else{
                echo '<p class="hot">'.$far.' is a cooker</p>';
            }//closing else
        }//close isset

        } //close server request method
    ?>
</body>
</html>
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
    h1{
        text-align: center;
    }
    h2{
        text-align: center;
        color: red;
    }
    fieldset{
        padding: 10px;
        background-color: beige;
    }

    label{
        display: block;
        margin-bottom: 5px;
    }

    form ul {
        margin-left: 20px;
        list-style-type: none;
        margin-bottom: 10px;
    }
    select{
        margin-bottom: 10px;
        display: block;
    }

    .reset{
        display: inline;
        margin-left: 10px;
    }

    .box {
        width: 600px;
        margin: 20px auto;
        text-align: center;
        /* background: beige; */
        border: solid 1px black;
        padding: 10px;
    }
</style>

</head>

<body>
    <form action="" method="post">
        <h1>Our Calculator</h1>
        <fieldset>
            <label>Your Name</label>
            <input type="text" name="name">
            <label>How many miles will you be driving</label>
            <input type="text" name="miles">
            <label>How many hours per day would you like to be driving</label>
            <input type="text" name="hours">
            <label>Price per gallon</label>
            <ul>
                <li><input type="radio" name="price" value="3.00">$3.00</li>
                <li><input type="radio" name="price" value="3.50">$3.50</li>
                <li><input type="radio" name="price" value="4.00">$4.00</li>
            </ul>
            <label>Fuel Efficiency</label>
            <select name="efficiency">
                <option value="NULL">Select One</option>
                <option value="20">Terrible 10mpg</option>
                <option value="30">Better 30mpg</option>
                <option value="40">Good 40mpg</option>
                <option value="50">Amazing 50mpg</option>
            </select>
            <input type="submit" value="Calculate">
            <p class="reset"><a href="">Reset</a></p>
        </fieldset>
    </form>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['miles'] &&
                $_POST['price'] &&
                $_POST['name'] &&
                $_POST['hours'] &&
                $_POST['efficiency'])) {
                    echo '<div class="box">';
                    echo '<h2>Error!</h2>';
                    echo '<p>Please fill out the form completely!</p>';
                    echo '</div>';

        } elseif(isset($_POST['miles'],
                    $_POST['price'],
                    $_POST['efficiency'],
                    $_POST['hours'],
                    $_POST['name']) &&
                is_numeric($_POST['miles']) &&
                is_numeric($_POST['hours'])
                ) {
                    $miles = $_POST['miles'];
                    $price = $_POST['price'];
                    $efficiency = $_POST['efficiency'];
                    $name = $_POST['name'];
                    $hours = $_POST['hours'];
                    
                    $mpg = $miles / $efficiency;
                    $mph = 64;
                    $cost = $mpg * $price;
                    $costFormat = number_format($cost, 2);
                    $totalHours = ceil($miles / $mph);
                    $days = floor($totalHours / $hours);

                    echo '<div class="box">';
                    echo '<h2>Calculator Results</h2>';
                    echo '<p>'.$name.' you will be driving <b>'.$miles.' miles</b></p>';
                    echo '<p> Your vehicle has an efficiency rating of <b>'.$efficiency.'miles per gallon</b></p>';
                    echo '<p>Your total cost for gas will be <b>$ '.$costFormat.' dollars</b></p>';
                    echo '<p>You will be driving a total of <b>'.$totalHours.' hours equating to '.$days.' days.</b></p>';
                    echo '</div>';
                }

    }//ends server request

?>
</body>
</html>
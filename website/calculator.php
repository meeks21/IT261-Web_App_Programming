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
    h3{
        text-align: center;
    }
    fieldset{
        padding: 10px;
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

    p{
        display: inline;
        margin-left: 10px;
    }

    .box {
        width:400px;
        margin: 20px auto;
        /* background: beige; */
        padding: 10px;
    }
</style>

</head>

<body>
    <form action="" method="post">
        <h1>Our Calculator</h1>
        <fieldset>
            <label>How many miles will you be driving</label>
            <input type="text" name="miles">
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
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['miles'] &&
                $_POST['price'] &&
                $_POST['efficiency'])) {
                    echo'<div class="box"><h3>Error!</h3></div>';
                    echo 'Please enter a valid distance, price per gallon and fuel efficiency';

        } elseif(isset($_POST['miles'],
                    $_POST['price'],
                    $_POST['efficiency']) &&
                is_numeric($_POST['miles'])
                ) {
                    $miles = $_POST['miles'];
                    $price = $_POST['price'];
                    $efficiency = $_POST['efficiency'];
                    
                    $mpg = $miles / $efficiency;
                    $cost = $mpg * $price;
                    $costFormat = number_format($cost, 2);

                    echo'<div class="box"><h3>Calculator Results</h3></div>';
                    echo 'You have driven '.$miles.' miles  <br>';
                    echo 'Your vehicle has an efficiency rating of '.$efficiency.'miles per gallon <br>';
                    echo 'Your total cost for gas will be $ '.$costFormat.' dollars';
                }

    }//ends server request

?>
</body>
</html>


<html>
<head>
<title>My Adder Assignment</title>
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:</label>
<input type="text" name="num1"><br>
<label>Enter the second number:</label>
<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

<?php

if(isset($_POST['num1'],
$_POST['num2'])){

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;

echo '<h2> You added '.$num1.' and '.$num2.'</h2>';
echo '<p style="color:red;"> and the answer is <br>'.$myTotal.'!</p>';
echo '<p><a href="">Reset page</a></p>';
}
?>

<!--An extra opening bracket just before the closing php tag--> 
<!--closing php tag on the last line needs to be placed just before the opening html-->
<!--opening form tag has an unnecessary backslash-->
<!--first echo statement has double quotes where there should be single quotes-->
<!--The string inside the first echo statement need a closing h2 tag -->
<!--inline style needs to bee inside the opening p tag in the second echo-->
<!--Second and third echo need semicolons at the end-->
<!--Third echo needs a closing p tag -->
<!--value inside the input tag nees a closing double quote -->
<!--The myTotal variable needs to be concatenated with single quotes because the statement began with single quotes-->
<!--both labels need an opening label tag -->
<!--form needs a post method attribute -->
<!--extra comma and semi-colon just before the closing php tag-->
<!-- There need to space between the opening php tag abd the comments that followed -->
<!-- the isset function on has one argument, but there are two variables within the conditional that need to be defined -->
<!-- input ones name value needs to be lower case -->
<!-- the myTotal variable has a substration operator after it -->
<!-- Num2 in the expression assigned to myTotal needs to be lowercase -->
<!-- Place the php tags below the form so that the results are displayed below the form just like in the example, and so you dont get error
 -->


</body>
</html>
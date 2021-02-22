<?php

// echo date('Y');
// echo '<br>';
// echo date('l');

//if today is Thursday, show me Thursday's content

//Global variable, capitalized, and the global variable have many attributes
//$_POST
//$_GET
//IS TODAY SET????
//isset is a function -- isset()
date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');



if(isset($_GET['today'])) {
    $today = $_GET['today'];
    
} else {
    $today = date('l');
}

echo '<br>';
switch($today){
    case 'Thursday': 
        $coffee = 'Thursday is my latte day';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'This will be my latte content!!!';
        $background = 'pink';
    break;
    case 'Friday': 
        $coffee = 'Friday is my Americano day ';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'This will be my Americano content!!! ';
        $background = 'yellow';
    break;
    case 'Saturday': 
        $coffee = 'Saturday is my Pumpkin Latte day ';
        $pic = 'latte.jpg';
        $alt = 'Pumpkin Latte';
        $content = 'This will be my Pumpkin Latte!!! ';
        $background = 'light-blue';
    break;

}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
    body.pink{
        background: pink;        
    }

    body.yellow{
        background: yellow;
    }

    body.light-blue{
        background-color: lightblue;
    }

</style>
<title>Untitled Document</title>

</head>

    <body class="<?php  echo $background; ?>">
        <h1>
        <?php         
        if($todayDate <= 11) {
            echo 'Good Morning! <br>';
        } elseif($todayDate <=15) {
            echo 'Good Afternoon <br>';
        } else {
            echo 'Good Evening <br>';
        }
        echo '<br>';
        echo $coffee;
        ?>
        </h1>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <p><?php echo $content; ?></p>

        <h2>Check out our daily specials below!</h2>

        <ul>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
        
    </body>
</html>
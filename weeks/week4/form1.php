<?php
//form part 1
//dont care about the HTML, body tag...
//the form elements <input> <label> <form>
//name attribute and VALUE!!!!


//undefined errors - 

if(isset($_POST['name'],
        $_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
        echo $name;
        echo $email;
} else {
    echo '
        <form action="" method="post">
        <label>NAME</label>
        <input type="" name="name">
        
        <label>EMAIL</label> 
        <input type="email" name="email"><br>
        <input type="submit" value="Send it!">
        <p><a href="">Reset</a></p>       
        </form>   
    ';
}
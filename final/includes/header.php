<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
   
        <div class="logo_container">
            <img class="logo" src="images/logo3.png" alt="logo">
        </div>
        
        <nav class="nav_bar">
            <?php
                    // if we are on this page, that would be our active page. If we are not on this page, it is not active.
                foreach($nav as $key => $value) {
                    
                    if(THIS_PAGE == $key) {
                        echo '<a class="active" href="'.$key.'">'.$value.'</a>';
                    } else {
                        echo '<a href="'.$key.'">'.$value.'</a>';
                    }  
                }
            ?>
        </nav>


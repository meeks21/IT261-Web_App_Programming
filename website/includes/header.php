

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/styles.css" type="text/css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">
<!--  title will change on all of the pages -->
<title><?php echo $title;?></title>

</head>
<body class="<?php echo $body;?> <?php echo $background; ?>">
    <diV class="wrapper">
        <header>
            <h1><a href="https://www.kemar-meeks.com/IT261/index.php">PHP</a></h1>
        </header>
        <nav class="top_nav">
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
            <!-- <a href="#">Home</a>
            <a href="#">About</a>
            <a href="daily.php">Daily</a>
            <a href="#">People</a>
            <a href="#">Contact</a>
            <a href="#">gallery</a> -->
        </nav>
        
        <div class="banner">
            <img class="bannerImage" src="<?php echo $banner;?>" alt="banner image">
        </div>
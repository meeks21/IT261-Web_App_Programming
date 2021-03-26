<?php
    include('config.php');
    include('includes/header.php');

    if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];
    } else {
        header('Location:ramen.php');
    }

    $sql = 'SELECT * FROM Ramen WHERE id = '.$id.'';

    $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
    die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql)or 
    die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0) {

        while($row=mysqli_fetch_assoc($result)){
           $name = stripslashes($row['name']);
           $description = stripslashes($row['description']);
           $feedback = '';
          
        }
    
    } else {
    
        $feedback = 'Nobody\'s Home';
    } //closing else

?>
    <div class="ramen_wrapper">
    <main>
        <h1>You will love our <?php echo $name; ?> Ramen</h1>
        <h3><?php echo $name; ?> is made fresh daily</h3>
        <h5>Ingredients: </h5>
        <?php
        if($feedback == '') {

            echo '<p>'.$description.'</p>';
            echo '<p class="ramen_description"><a href="ramen.php">Return to the Main Page</a></p>';


            } else {
                echo $feedback;
            }

        ?>
    </main>
    <aside>
    <?php
        if($feedback == '') {
                echo '<img src="images/ramen'.$id.'.jpg" alt="'.$name.'">';
            }
        
        ?>
        
    </aside>
    </div>
    
    <?php
     // releaseing the web server
    mysqli_free_result($result);

    // close the connection
    mysqli_close($iConn);
    ?>
<?php include('includes/footer.php'); ?>
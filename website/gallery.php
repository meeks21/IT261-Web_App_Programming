<?php
    include('config.php');
    include('includes/header.php');

  
   
    //select the table
    $sql = 'SELECT * FROM guitars';

    //connect to database
    $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
    die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql)or 
    die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


     

?>
    <main>
        <table>
        <?php

        if(mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_assoc($result)){
                
                echo '<tr>';
                echo '<td><img src="images/guitar'.$row['id'].'.jpg" alt="'.$row['brand'].'"></td>';
                echo '<td>'.$row['brand'].'</td>';
                echo '<td>'.$row['model'].'</td>';
                echo '<td><img src="images/guitartwo'.$row['id'].'.jpg" alt="'.$row['brand'].'"></td>';
                echo '</tr>';
               
                }
            } else {

                echo 'Nobody Home';
            
             }

            // releaseing the web server
            mysqli_free_result($result);

            // close the connection
            mysqli_close($iConn);
        
        ?>

     
        </table>
    </main>
    <aside>
    
        
    </aside>
<?php include('includes/footer.php'); ?>
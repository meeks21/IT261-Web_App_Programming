<?php
    include('config.php');
    include('includes/header.php');

    $sql = 'SELECT * FROM Ramen';

    $iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
    die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql)or 
    die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

?>  
    <div class="ramen_wrapper">
    <main>
        <h1>The Ramen Spot</h1>
        <h3>Check out some of our amazing ramen dishes!</h3>
        <?php
             if(mysqli_num_rows($result) > 0) {
                while($row=mysqli_fetch_assoc($result)){
            
                    //this array is going to display the contents of your row
                    echo '<ul class="ramen_list">';
                    echo '<li><a href="ramen-view.php?id='.$row['id'].'">'.$row['name'].'</a></li>';
                    
                   
                    
                    echo '</ul>';
            
                } //end while loop
             } else {
            
                echo 'Nobody Home';
            
             } // close if mysqli num rows
            
            
             // releaseing the web server
             mysqli_free_result($result);
            
             // close the connection
             mysqli_close($iConn);
    
        ?>


    </main>
    <aside>
    <img src="images/ramendining.jpg">
        
    </aside>
    </div>
<?php include('includes/footer.php'); ?>
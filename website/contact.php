<?php
    include('config.php');
    include('includes/header.php');



?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <fieldset>
                <label>Name</label>
                <input
                type="text"
                name="name"
                >

                <label>Email</label>
                <input
                type="text"
                name="email"
                >

                <label>Phone number</label>
                <input
                type="tel"
                name="phone"
                placeholder="xxx-xxx-xxxx">

                <label>What genres do you want to learn?</label>
                <ul>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="blues">Blues</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="rock">Rock</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="metal">Metal</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="jazz">Jazz</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="funk">Funk</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="country">Country</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="bluegrass">Bluegrass</li>                   
                </ul>

                <label>How many times a week can you attend lessons?</label>
                <select name="numDays">
                    <option value="NULL">Select One</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                    <option value="four">Four</option>
                </select>
                <label>Agree to "privacy" policy</label>
                <ul>
                    <li>
                    <input
                    type="radio"
                    name="agree"
                    value="agree">Agree
                    </li>
                </ul>
                <input type="submit" value="Send">
                <p><a href="">Reset</a></p>

            </fieldset>


        </form>






    </main>
    <aside>
    
        
    </aside>
<?php include('includes/footer.php'); ?>
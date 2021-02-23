<?php

    include('config.php');
    include('includes/header.php');

?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h2>North West Guitar Lessons</h2>
            <fieldset>
                <label>Name</label>
                <input
                type="text"
                name="name"
                value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>"
                >
                <span class="err"><?php echo $nameErr ?></span>

                <label>Email</label>
                <input
                type="text"
                name="email"
                value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"
                >
                <span class="err"><?php echo $emailErr ?></span>

                <label>Phone number</label>
                <input
                type="tel"
                name="phone"
                placeholder="xxx-xxx-xxxx"
                value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
                <span class="err"><?php echo $phoneErr ?></span>

                <label>What genre do you want to learn?</label>
                <ul>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="blues"
                    <?php if(isset($_POST['genre']) && in_array('blues', $genre)) echo 'checked = "checked"';?>
                    >Blues</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="rock"
                    <?php if(isset($_POST['genre']) && in_array('rock', $genre)) echo 'checked = "checked"';?>
                    >Rock</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="metal"
                    <?php if(isset($_POST['genre']) && in_array('metal', $genre)) echo 'checked = "checked"';?>
                    >Metal</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="jazz"
                    <?php if(isset($_POST['genre']) && in_array('jazz', $genre)) echo 'checked = "checked"';?>
                    >Jazz</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="funk"
                    <?php if(isset($_POST['genre']) && in_array('funk', $genre)) echo 'checked = "checked"';?>
                    >Funk</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="country"
                    <?php if(isset($_POST['genre']) && in_array('country', $genre)) echo 'checked = "checked"';?>
                    >Country</li>
                    <li><input
                    type="checkbox" 
                    name="genre[]"
                    value="bluegrass"
                    <?php if(isset($_POST['genre']) && in_array('bluegrass', $genre)) echo 'checked = "checked"';?>
                    >Bluegrass</li>                   
                </ul>
                <span class="err"><?php echo $genreErr ?></span>

                <label>How many times a week can you attend lessons?</label>
                <select name="numDays">
                    <option value="NULL"
                    <?php if(isset($_POST['numDays']) && $_POST['numDays'] == 'NULL') echo 'selected = unselected';?>
                    >Select One</option>
                    <option value="one"
                    <?php if(isset($_POST['numDays']) && $_POST['numDays'] == 'one') echo 'selected = selected';?>
                    >One</option>
                    <option value="two"
                    <?php if(isset($_POST['numDays']) && $_POST['numDays'] == 'two') echo 'selected = selected';?>
                    >Two</option>
                    <option value="three"
                    <?php if(isset($_POST['numDays']) && $_POST['numDays'] == 'three') echo 'selected = selected';?>
                    >Three</option>
                    <option value="four"
                    <?php if(isset($_POST['numDays']) && $_POST['numDays'] == 'four') echo 'selected = selected';?>
                    >Four</option>
                </select>
                <span class="err"><?php echo $numDaysErr ?></span>

                <label>Agree to "privacy" policy</label>
                <ul>
                    <li>
                    <input
                    type="radio"
                    name="agree"
                    value="agree"
                    <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked = checked';?>>Agree
                    </li>
                </ul>
                <span class="err"><?php echo $agreeErr ?></span>
                <input type="submit" value="Send">
                <p><a href="">Reset</a></p>

            </fieldset>

        </form>

    </main>
    <aside>
    
        
    </aside>
<?php include('includes/footer.php'); ?>
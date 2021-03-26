<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h2>K&M Travel Agency</h2>
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

                <label>Where would you like to travel?</label>
                <ul class="form-list">
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="New Zealand"
                    <?php if(isset($_POST['travel']) && in_array('New Zealand', $travel)) echo 'checked = "checked"';?>
                    > New Zealand</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="germany"
                    <?php if(isset($_POST['travel']) && in_array('germany', $travel)) echo 'checked = "checked"';?>
                    > Germany</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="mexico"
                    <?php if(isset($_POST['travel']) && in_array('mexico', $travel)) echo 'checked = "checked"';?>
                    > Mexico</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="australia"
                    <?php if(isset($_POST['travel']) && in_array('australia', $travel)) echo 'checked = "checked"';?>
                    > Australia</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="czech"
                    <?php if(isset($_POST['travel']) && in_array('czech', $travel)) echo 'checked = "checked"';?>
                    > Czech</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="canada"
                    <?php if(isset($_POST['travel']) && in_array('canada', $travel)) echo 'checked = "checked"';?>
                    > Canada</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="thailand"
                    <?php if(isset($_POST['travel']) && in_array('thailand', $travel)) echo 'checked = "checked"';?>
                    > Thailand</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="singapore"
                    <?php if(isset($_POST['travel']) && in_array('singapore', $travel)) echo 'checked = "checked"';?>
                    > Singapore</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="argentina"
                    <?php if(isset($_POST['travel']) && in_array('argentina', $travel)) echo 'checked = "checked"';?>
                    > Argentina</li>
                    <li><input
                    type="checkbox" 
                    name="travel[]"
                    value="montenegro"
                    <?php if(isset($_POST['travel']) && in_array('montenegro', $travel)) echo 'checked = "checked"';?>
                    > Montenegro</li>                   
                </ul>
                <span class="err"><?php echo $travelErr ?></span>

                <label>How many days would you like to spend in each destintation?</label>
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
<?php

date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){

    case 'Monday':
        $entree = 'Garlic Caper Butter Baked Salmon';
        $pic = 'images/Salmon.jpg';
        $alt = 'Baked Salmon';
        $content = 'Served with rustic potatoes, garden salad, and garlic bread.';
        $background = "monday";
    break;

    case 'Tuesday':
        $entree = 'Grass Fed New York Stip Steak';
        $pic = 'images/nystripe.png';
        $alt = 'New York Stip Steak';
        $content = 'Served with yukon gold mashed potatoes, and asparagus.';
        $background = "tuesday";
    break;

    case 'Wednesday':
        $entree = 'Shrimp Scampi';
        $pic = 'images/shrimp.jpg';
        $alt = 'Shrimp Scampi';
        $content = 'Juicy shrimp in garlic butter white wine sauce tossed with thin pasta.';
        $background = "wednesday";
    break;

    case 'Thursday':
        $entree = 'Vietnamese Lemon Grass Beef with Rice Noodles';
        $pic = 'images/lemon-grass-beef.jpg';
        $alt = 'Beef with Rice Noodles';
        $content = 'Sauteed beef marinated in lemongrass and garlic and tossed with cold vermicelli noodles and fresh herbs.';
        $background = "thursday";
    break;

    case 'Friday':
        $entree = 'Cuban-Style Pollo a la Plancha';
        $pic = 'images/pollo-a-la-plancha.jpg';
        $alt = 'Pollo a la Plancha';
        $content = 'Cuban-style chicken cutlets are marinated with citrus juices and spices, then seared in a skillet until well browned and juicy.';
        $background = "friday";
    break;

    case 'Saturday':
        $entree = 'Osso Bucco with Risotto Milanese';
        $pic = 'images/ossobuco.jpg';
        $alt = 'Osso Bucco';
        $content = 'Veal shanks seared and then braised in a sauce with red wine, herbs and beef stock. The meat is super tender, and is traditionally served over Risotto.';
        $background = "saturday";
    break;

    case 'Sunday':
        $entree = 'Low-Carb Vegan Dinner Bowl';
        $pic = 'images/vegan2.jpg';
        $alt = 'Vegan dinner bowl';
        $content = 'Low-carb vegan bowl features cabbage, broccoli, kale, tofu and a delicious almond satay sauce to top it off.';
        $background = "sunday";
    break;

}
?>

<?php
    include('config.php');
    include('includes/header.php');

?>
    <main class="container ">
        <div >
       
            <h1>Kemar's Bistro</h1>

            <div class="content-container">
            <h2><?php echo $today;?> Special</h2>
            <h3><?php echo $entree;?>:</h3>
            <p><b><i><?php echo $content;?></i></b></p>
            </div>           
        </div>
        <h4>List of Daily Specials:</h4>
        <ul class="special-list">
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>            
        </ul>

    </main>

    <aside>
        <div class="image-container">
            <img src="<?php echo $pic;?>" alt="<?php echo $alt;?>">   
        </div>       
    </aside>


    <?php include('includes/footer.php');?>
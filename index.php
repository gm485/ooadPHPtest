
<?php use classes\User;
require_once 'data/Fruit.php';
require_once 'classes/User.php';
require 'templates/header.php';?>


<h2>here we have text</h2>
<?php
    echo "this is a test";

    $user1 = new User("Gary", "Murtagh",
    "123-575-3851", "tu dublin", "this is a test");

    echo $user1->getFirstName();
    echo $user1->getLastName();
    echo $user1::$drivingAge;
    $user1::setDrinkingAge(21);
    echo $user1::$drivingAge;
    ?>


<?php require 'templates/footer.php';?>

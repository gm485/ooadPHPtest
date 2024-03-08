<?php require 'templates/header.php';?>


<?php


$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
<?php require 'templates/footer.php';?>


<?php
if (isset($_POST['submit']))  {
    require 'common.php';
    try {
        require_once 'src/DBconnect.php';
        $new_car = array(
            "LicenseNo" => escape($_POST['LicenseNo']),
            "StockNo" => escape($_POST['StockNo']),
            "PassengerNo" => escape($_POST['PassengerNo']),
            "Make" => escape($_POST['Make']),
            "Year" => escape($_POST['Year'])
        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

include "templates/header.php";
if (isset($_POST['submit']) && $statement){
    echo $new_user['firstname']. ' successfully added';
}
?>
<h2>Add a Vehicle</h2>
<form method="post">
    <label for="LicenseNo">LicenseNo</label>
    <input type="text" name="LicenseNo" id="LicenseNo" required>
    <label for="StockNo">StockNo</label>
    <input type="text" name="StockNo" id="StockNo" required>
    <label for="PassengerNo">PassengerNo</label>
    <input type="text" name="PassengerNo" id="PassengerNo" required>
    <label for="Make">Make</label>
    <input type="text" name="Make" id="Make">
    <label for="Year">Year</label>
    <input type="text" name="Year" id="Year">
    <input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to home</a>
<?php include "templates/footer.php"; ?><?php

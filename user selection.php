<!DOCTYPE html>
<html>
<head>
    <title>Favorite Car Selection</title>
</head>
<body>

<h2>Select Your Favorite Car</h2>

<form method="post" action="">
    <label for="car">Choose a car:</label>
    <select name="car" id="car">
        <option value="Nissan">Nissan</option>
        <option value="Mitsubishi">Mitsubishi</option>
        <option value="Toyota">Toyota</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $selected_car = $_POST['car'];
    echo "<h3>Your favorite car is: <u>$selected_car</u></h3>";
}
 echo "<br/>This program is written by Utkarsh";

?>

</body>
</html>

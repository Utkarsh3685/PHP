<!-- HTML Form to take birthdate input -->
<form method="post">
    Enter your Birthdate: <input type="date" name="birthdate" required>
    <input type="submit" value="Calculate Age">
</form>

<?php
// Check if form is submitted
if (isset($_POST['birthdate'])) {
    $birthDate = $_POST['birthdate'];

    // Current date
    $currentDate = date("Y-m-d");

    // Create DateTime objects
    $birthDateObj = new DateTime($birthDate);
    $currentDateObj = new DateTime($currentDate);

    // Calculate difference
    $ageInterval = $birthDateObj->diff($currentDateObj);

    // Output the results
    echo "You are " . $ageInterval->y . " years, " . $ageInterval->m . " months, and " . $ageInterval->d . " days old.";
    echo "<br/>This program is written by Utkarsh";

}
?>
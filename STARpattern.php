<?php
$row = 15;
for ($i = $row; $i >= 1; $i--) {  // Loop for rows
    for ($j = 1; $j <= $i; $j++) {  // Loop for printing stars
        echo "*";  // Add a space after each star
    }
    // Move to the next line after printing each row of stars
    echo "<br>";
}

// Output the program credit
echo "This program is written by Utkarsh";
?>

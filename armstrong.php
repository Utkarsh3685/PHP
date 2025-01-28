<?php
// Function to check if a number is Armstrong
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;

    while ($temp > 0) {
        $digit = $temp % 10; // Get the last digit
        $sum += $digit * $digit * $digit; // Add the cube of the digit
        $temp = (int)($temp / 10); // Remove the last digit
    }

    return $sum == $number; // Check if the sum equals the original number
}

// Input number
$number = 153;

// Check and display result
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}

// Print author message
echo "This program is written by Utkarsh.\n";
?>

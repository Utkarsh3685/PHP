<?php
// Function to calculate HCF
function findHCF($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b; // Remainder
        $a = $temp;
    }
    return $a;
}

// Input numbers
$num1 = 36;
$num2 = 60;

// Calculate and display HCF
$hcf = findHCF($num1, $num2);
echo "The HCF of $num1 and $num2 is: $hcf\n";

// Print author message
echo "This program is written by Utkarsh.\n";
?>

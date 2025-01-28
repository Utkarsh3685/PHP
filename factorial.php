<?php
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i; // Multiply each number
    }
    return $result;
}

$number = 5;

echo "The factorial of $number is: " . factorial($number) . "\n";


echo "This program is written by Utkarsh.\n";
?>

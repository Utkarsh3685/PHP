<?php

$terms = 10;


$first = 0;
$second = 1;

echo "Fibonacci series: $first, $second";


for ($i = 3; $i <= $terms; $i++) {
    $next = $first + $second; // Calculate the next term
    echo ", $next"; // Print the next term
    $first = $second; // Update first term
    $second = $next;  // Update second term
}

echo "\nThis program is written by Utkarsh.\n";
?>

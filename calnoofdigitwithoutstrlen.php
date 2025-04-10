<?php
$num = 123456; // You can change this number
$original_num = $num; // Storing original number for display
$count = 0;

if ($num == 0) {
    $count = 1;
} else {
    while ($num != 0) {
        $num = (int)($num / 10);
        $count++;
    }
}

echo "The number of digits in $original_num is: $count";
 echo "<br/>This program is written by Utkarsh";

?>

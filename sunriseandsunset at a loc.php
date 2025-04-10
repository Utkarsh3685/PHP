<?php
// Set your location (latitude, longitude) and timezone
$latitude = 28.6139;   // Example: New Delhi latitude
$longitude = 77.2090;  // Example: New Delhi longitude
$timezone = 5.5;       // IST is UTC +5:30 hours

// Today's date
$timestamp = time();

// Get sunrise and sunset time
$sunrise = date_sunrise($timestamp, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, $timezone);
$sunset = date_sunset($timestamp, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, $timezone);

// Output the result
echo "Sunrise time: " . $sunrise . "<br>";
echo "Sunset time: " . $sunset . "<br>";
 echo "<br/>This program is written by Utkarsh";

?>
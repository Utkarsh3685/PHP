<!DOCTYPE html>
<html>
<head>
    <title>Local Time Function</title>
</head>
<body>
    <?php
    date_default_timezone_set("Asia/Kolkata");

    $localtime = localtime(time(), true);

    echo "<h2>Current Local Time Details</h2>";
    echo "<ul>";
    echo "<li><strong>Hour:</strong> " . $localtime['tm_hour'] . "</li>";
    echo "<li><strong>Minute:</strong> " . $localtime['tm_min'] . "</li>";
    echo "<li><strong>Second:</strong> " . $localtime['tm_sec'] . "</li>";
    echo "<li><strong>Day:</strong> " . $localtime['tm_mday'] . "</li>";
    echo "<li><strong>Month:</strong> " . ($localtime['tm_mon'] + 1) . "</li>";
    echo "<li><strong>Year:</strong> " . ($localtime['tm_year'] + 1900) . "</li>";
    echo "</ul>";
    echo "<br/>This program is written by Utkarsh";

    ?>
</body>
</html>
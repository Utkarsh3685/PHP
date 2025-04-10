<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Utkarsh";
    $_SESSION["lastname"] = "Kashyap";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "\n";
    echo "Last name is " . $_SESSION["lastname"];
    echo "<br/>This program is written by Utkarsh";


?>
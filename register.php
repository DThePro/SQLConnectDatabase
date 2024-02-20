<?php

    $con = mysqli_connect('sql6.freesqldatabase.com', 'sql6684383', 'Lpw3dtzYZT', 'sql6684383');
    
    if (mysqli_connect_error())
    {
        echo "ERR1: Connection failed.";
        exit();
    }
    
    $username = $_POST["name"];
    $password = $_POST["password"];
    
    $namecheckquery = "SELECT username from Users WHERE username = '" . $username . "';";
    $namecheck = mysqli_query($con, $namecheckquery) or die("ERR2: Name check failed.");
    
    if (mysqli_num_rows($namecheck) > 0)
    {
        echo "ERR3: Name already exists.";
        exit();
    }
    
    $insertuserquery = "INSERT INTO Users (username, password) VALUES ('" . $username . "', '" . $password . "');";
    mysqli_query($con, $insertuserquery) or die("ERR4: Registration failed.");
    
    echo "0";

?>

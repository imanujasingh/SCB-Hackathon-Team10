<?php
    define ('DB_SERVER','localhost');
    define ('DB_USERNAME','root');
    define ('DB_PASSWORD','password');
    define ('DB_NAME','team10');

    //Try connecting to the database
    global $conn;
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    //Check the connection
    if($conn == false){
        die('Error:Cannot Connect');
    }
    else{
        //echo 'Connection done';
    }
?>
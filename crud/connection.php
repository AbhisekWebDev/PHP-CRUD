<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn){
        // echo "conn ok";
    }
    else{
        echo "conn fail";
    }
?>
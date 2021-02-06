<?php


    define("servername","localhost");
    define("username","root");
    define("password","");
    define("dbname","practice");

    $conn = mysqli_connect(servername,username,password,dbname);
    if (!$conn) {
        die("Connection failed : " . mysqli_connect_error());
    }

?>
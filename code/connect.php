<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "blogvn";

    $conn = new mysqli($servername, $username, $password,$db);

    if ($conn->connect_error){
        die("Connectionn failed: ". $conn->connect_error);
    }
    
?>
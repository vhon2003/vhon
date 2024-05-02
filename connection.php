<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name =  "database1";
    $conn = mysqli_connect('localhost','root','','database1');
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";

?>

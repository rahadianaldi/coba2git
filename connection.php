<?php

    $server = "85.10.205.173:3306";
    $username = "adminsales";
    $password = "adminsales";
    $databasename = "db_sales";

    $conn = mysqli_connect($server, $username, $password, $databasename);
    if(!$conn){
        die("Koneksi mati gaes");

    }
?>
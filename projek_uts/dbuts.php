<?php
    $host = 'localhost';
    $dbuts = 'dbuts';
    $username = 'root';
    $password = '';


    try{
        $conn = new PDO("mysql: host=$host; dbuts=$dbuts", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo"Koneksi Gagal " . $e->getMessage();
    } 

?>
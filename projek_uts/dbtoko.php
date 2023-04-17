<?php
    $host = 'localhost';
    $dbtoko = 'dbtoko';
    $username = 'root';
    $password = '';
    $charset='utf8mb4';


    try{
        $conn = new PDO("mysql: host=$host; dbtoko=$dbtoko", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo"Koneksi Gagal " . $e->getMessage();
    } 

?>
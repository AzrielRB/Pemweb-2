<?php

require_once 'class_bmipasien.php';

$bmipasien = new bmipasien();

$bmipasien->nama = $_POST['nama'];
$bmipasien->umur = $_POST['umur'];
$bmipasien->jenis_kelamin = $_POST['jk'];
$bmipasien->berat = $_POST['berat'];
$bmipasien->tinggi = $_POST['tinggi'];

$bmi = $bmipasien->hasilBMI();
$status = $bmipasien->statusBMI();

echo "<h1>Hasil BMI Pasien</h1>";
echo "<br>";
echo "Nama: ".$bmipasien->nama;
echo "<br>";
echo "Umur: ".$bmipasien->umur;
echo "<br>";
echo "Jenis Kelamin: ".$bmipasien->jenis_kelamin;
echo "<br>";
echo "Berat: ".$bmipasien->berat;
echo "<br>";
echo "Berat BMI: " .$status;
echo "<br>";
echo "Tinggi: " .$bmipasien->tinggi;
echo "<br>";
echo "Tinggi BMI: ".$bmi;
?>
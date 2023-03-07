<?php

// jika belum mengisi form maka tidak dapat pergi ke halaman hasil
if(!isset($_POST['submit'])){
    header("location: index.php");
    exit;
}




$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];



//menentukan nilai akhir
$nilai_akhir = ($uts + $uas + $tugas) / 3;



// mengambil sekaligus menjalankan skrip yang ada di library fungsi untuk cetak ke lulusan dan grade
require_once 'libfungsi.php';
$_nilai = $nilai_akhir;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      <th scope="col">GRADE</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td> <?= $nama ?> </td>
      <td> <?= $matkul?> </td>
      <td> <?= $uts?> </td>
      <td> <?= $uas?> </td>
      <td> <?= $tugas?> </td>
      <td> <?= $nilai_akhir?> </td>
      <td> <?= grade($_nilai) ?> </td>
      <td> <?= keterangan($_nilai) ?> </td>
    </tr>
  </tbody>
</table>

</body>
</html>
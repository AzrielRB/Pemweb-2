<?php
require_once 'dbtoko.php';
?>

<?php
$sql = " SELECT * FROM pesanan";
$rs = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered border-primary">
    <thead>
        <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Pembeli</th>
        <th>Alamat</th>
        <th>Nomor HP</th>
        <th>Email</th>
        <th>Jumlah</th>
        <th>Deskripsi</th>
        <th>Produk</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $nomor  =1 ;
        foreach ($rs as $row) {
        ?>

        <tr>
            <td><?= $number ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['nama_pemesan'] ?></td>
            <td><?= $row['alamat_pemesan'] ?></td>
            <td><?= $row['no_hp'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jumlah_pesanan'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['produk'] ?></td>
            <td>
            <a style="green" href="editpesan.php?id=<?= $row['id'] ?>" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span>EDIT</a>
            <a href="deletepesan.php?id=<?= $row['id'] ?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span>DELETE</a>
            </td>
        </tr>

        <?php

        $number++;
    }
        
        ?>
    </tbody>
</table>
</body>
</html>

<?php
    include_once 'template\footer.php';
?>
<?php 
require_once 'dbtoko.php';
?>
<?php
    $id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>   <td>Nama Pemesan</td><td><?=$row['nama_pemesan']?></td></tr>
        <tr>   <td>Alamat Pemesan</td><td><?=$row['alamat_pemesan']?></td></tr>
        <tr>   <td>Nomor Handphone</td><td><?=$row['no_hp']?></td></tr>
        <tr>   <td>Email</td><td><?=$row['email']?></td></tr>
        <tr>   <td>Jumlah Pesanan</td><td><?=$row['jumlah_pesanan']?></td></tr>
        <tr>   <td>Deskripsi</td><td><?=$row['deskripsi']?></td></tr>
        <tr>   <td>Produk id</td><td><?=$row['produk_id']?></td></tr>
    </tbody>
</table>
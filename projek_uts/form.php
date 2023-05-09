<?php
    include_once 'template\header.php';
    require_once 'dbtoko.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row">
	<div class="col-md-8">
<form action="proses_pesanan.php" method="POST">
  <div class="form-group">
  <label for="id">ID</label>
  <input type="number" class="form-control" id="id" placeholder="hanya angka 1 sampai 6" >
  </div>
  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" >
  </div>
  <div class="form-group">
    <label for="nama_pemesan">Nama customer</label>
    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
  </div>
  <div class="form-group">
    <label for="alamat_pemesan">Alamat customer</label>
    <input type="text" class="form-control" id="alamat_pemesan" name="alamat_pemesan">
  </div>
  <div class="form-group">
    <label for="no_hp">Nomor Handphone</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="jumlah_pesanan">Jumlah </label>
    <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan">
  </div>
  <div class="form-group">
    <label for="">Deskripsi</label>
    <input type="text" class="form-control" id="deksripsi" name="deskripsi">
  </div>
  <div class="form-group">
    <label>produk</label>
    <div>
            <?php
                $sqlproduk = "SELECT * FROM produk";
                $rsproduk = $conn->query($sqlproduk);
            ?>
            <select name="produk_id" id="produk_id">
            <?php
                foreach($rsproduk as $rowproduk){
            ?>
                <option value="<?=$rowproduk['id']?>" ><?=$rowproduk['nama']?></option>
            <?php
                }
            ?>
            </select>
        </div>
  </div>
  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
</form>
    </div>
    </div>
</body>
</html>

<?php
  include_once 'template\footer.php';
?>
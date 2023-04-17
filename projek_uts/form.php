<?php
    include_once 'template\header.php';
    require_once 'dbtoko.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row">
	<div class="col-md-8">
<form action="proses_pesanan.php" method="POST">
  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" id="kode" >
  </div>
  <div class="form-group">
    <label for="nama">Nama customer</label>
    <input type="text" class="form-control" id="nama" >
  </div>
  <div class="form-group">
    <label for="alamat">Alamat customer</label>
    <input type="text" class="form-control" id="harga_jual" >
  </div>
  <div class="form-group">
    <label for="nohp">Nomor Handphone</label>
    <input type="text" class="form-control" id="harga_beli" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="stok" >
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah </label>
    <input type="number" class="form-control" id="min_stok" >
  </div>
  <div class="form-group">
    <label for="">Deskripsi</label>
    <input type="text" class="form-control" id="deksripsi" >
  </div>
  <div class="form-group">
    <label>produk</label>
    <div>
            <?php
            $conn->query("USE $dbtoko");
                $sqlkategori = "SELECT * FROM `produk`;";
                $rskategori = $conn->query($sqlkategori);
            ?>
            <select name="produk" id="produk">
            <?php
                foreach($rskategori as $rowkategori){
            ?>
                <option value="<?=$rowkategori['id']?>" ><?=$rowkategori['nama']?></option>
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
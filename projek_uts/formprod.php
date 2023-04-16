<?php
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
<form action="proses_produk.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Kode</label>
    <input type="text" class="form-control" id="kode" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Another input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Harga jual</label>
    <input type="text" class="form-control" id="harga_jual" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="">Harga Beli</label>
    <input type="text" class="form-control" id="harga_beli" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="">Stok</label>
    <input type="text" class="form-control" id="" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="">Min Stok</label>
    <input type="text" class="form-control" id="" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="">Deksripsi</label>
    <input type="text" class="form-control" id="" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="">Kategori</label>
    <div>
            <?php
            $conn->query("USE $dbtoko");
                $sqlkategori = "SELECT * FROM `kategori_produk`;";
                $rskategori = $conn->query($sqlkategori);
            ?>
            <select name="kategori_produk" id="kategori_produk">
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
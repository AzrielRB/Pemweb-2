<?php
    include_once 'template\header.php';
    require_once 'dbtoko.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM pesanan WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $_id = $_POST['id'];
        $_tanggal = $_POST['tanggal'];
        $_nama_pemesan = $_POST['nama_pemesan'];
        $_alamat_pemesan = $_POST['alamat_pemesan'];
        $_no_hp = $_POST['no_hp'];
        $_email = $_POST['email'];
        $_jumlah_pesanan = $_POST['jumlah_pesanan'];
        $_deskripsi = $_POST['deskripsi'];
        $_produk = $_POST['produk'];

        $sql = "UPDATE pesanan SET id= :id,tanggal= :tanggal,nama_pemesan= :nama_pemesan,
        alamat_pemesan= :alamat_pemesan,no_hp= :no_hp,email= :email,
        jumlah_pesanan= :jumlah_pesanan,deskripsi= :deskripsi,produk= :produk WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':tanggal', $_tanggal);
        $stmt->bindParam(':nama_pemesan', $_nama_pemesan);
        $stmt->bindParam(':alamat_pemesan', $_alamat_pemesan);
        $stmt->bindParam(':no_hp', $_no_hp);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':jumlah_pesanan', $_jumlah_pesanan);
        $stmt->bindParam(':deskripsi', $_deskripsi);
        $stmt->bindParam(':produk', $_produk);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        header('Location:list_pesanan.php');


    }



    $sqlproduk = "SELECT * FROM produk";
    $rowproduk = $conn->query($sqlproduk);
    $rowproduk->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row">
	<div class="col-md-8">
<form action="proses_pesanan.php" method="POST">
  <div class="form-group">
    <h5>Update</h5>
    <label for="id">ID</label>
    <input type="number" name="id" value="<?php echo $row['id']; ?>" >
    </div>
    <div>
    <label for="tanggal">tanggal</label>
    <input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" >
    </div>
  <div class="form-group">
    <label for="nama">Nama customer</label>
    <input type="text" name="nama_pemesan" value="<?php echo $row['nama_pemesan']; ?>" >
  </div>
  <div class="form-group">
    <label for="alamat">Alamat customer</label>
    <input type="text" name="alamat_pemesan" value="<?php echo $row['alamat_pemesan']; ?>">
  </div>
  <div class="form-group">
    <label for="no_hp">Nomor Handphone</label>
    <input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" >
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" name="jumlah_pesanan" value="<?php echo $row['jumlah_pesanan']; ?>" >
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" name="deskripsi" value="<?php echo $row ['deskripsi']; ?>" >
  </div>
  <div class="form-group">
    <label>produk</label>

            <select name="produk_id" id="produk_id">
            <?php
                while($produk_id = $rowproduk->fetch(PDO::FETCH_ASSOC)){
            ?>
                <option value="<?=$produk_id['id']?>" ><?=$produk_id['nama']?></option>
            <?php
                }
            ?>
            </select>
            
        </div>
        <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
  </div>
</form>
    </div>
    </div>
</body>
</html>

<?php
  include_once 'template\footer.php';
?>
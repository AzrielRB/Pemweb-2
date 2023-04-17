<?php
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
        $_tanggal = $_POST['tanggal'];
        $_nama_pemesan = $_POST['nama_pemesan'];
        $_alamat_pemesan = $_POST['alamat_pemesan'];
        $_no_hp = $_POST['no_hp'];
        $_email = $_POST['email'];
        $_jumlah_pesanan = $_POST['jumlah_pesanan'];
        $_deskripsi = $_POST['deskripsi'];
        $_produk = $_POST['produk'];

        $sql = "UPDATE pesanan SET tanggal= :tanggal,nama_pemesan= :nama_pemesan,
        alamat_pemesan= :alamat_pemesan,no_hp= :no_hp,email= :email,
        jumlah_pesanan= :jumlah_pesanan,deskripsi= :deskripsi,produk= :produk WHERE id = :id";

        $stmt = $conn->prepare($sql);

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
    <title>Edit Order</title>
</head>
<style>
		form {
			width: 500px;
			margin: auto;
			font-family: sans-serif;
			border: 1px solid #ccc;
			padding: 20px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="email"],
		textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #008CBA;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #006f8c;
		}
        button{
            background-color:yellow;
        }
</style>
<body>
    
</body>
</html>
<form method="POST">
		<h2>Edit Order</h2>
        <input type="hidden" name="tanggal" value="<?php echo $row['tanggal']; ?>">

        <label>Nama Pemesan</label>
    <input type="text" name="nama_pemesan" value="<?php echo $row['nama_pemesan']; ?>">

    <label>Alamat pemesan</label>
    <input type="text" name="alamat_pemesan" value="<?php echo $row['alamat_pemesan']; ?>">

    <label>No HP</label>
    <input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>">

    <label>Email</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>">

    <label>Jumlah Pesanan</label>
    <input type="number" name="jumlah_pesanan" value="<?php echo $row['jumlah_pesanan']; ?>">

    <label>Deskripsi</label>
    <input type="deskripsi" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">

    <label>Produk</label>
    <select name="produk" id="produk">
        <?php
            while($produk = $rowproduk->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $produk['id'] ?>"><?= $produk['nama']  ?>          </option>
        <?php
            }
        ?>
    </select>
        <button type="submit" name="submit">Save</button>
</form>

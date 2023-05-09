<?php 
require_once 'dbtoko.php';
?>
<?php 
   $tanggal = $_POST['tanggal'];
   $nama_pemesan = $_POST['nama_pemesan'];
   $alamat_pemesan = $_POST['alamat_pemesan'];
   $no_hp = $_POST['no_hp'];
   $email = $_POST['email'];
   $jumlah_pesanan = $_POST['jumlah_pesanan'];
   $deskripsi = $_POST['deskripsi'];
   $produk_id = $_POST['produk_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$tanggal; // ? 1
   $ar_data[]=$nama_pemesan; // ? 2
   $ar_data[]=$alamat_pemesan;// 3
   $ar_data[]=$no_hp;// 4
   $ar_data[]=$email;// 5
   $ar_data[]=$jumlah_pesanan; // ? 6
   $ar_data[]=$deskripsi; // ? 7
   $ar_data[]=$produk_id; // ? 8

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,
    no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";
   }else if($_proses == "edit"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,nama_pemesan=?,alamat_pemesan=?,no_hp=?,
    email=?,jumlah_pesanan=?,deskripsi=?,produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $stmt = $conn->prepare($sql);
    $stmt->execute($ar_data);
   }

   header('location:list_pesanan.php');
?>
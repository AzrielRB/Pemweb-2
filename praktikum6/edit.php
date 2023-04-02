<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql ="SELECT * FROM pelanggan WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
// fitur save

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir']; 
    $email = $_POST['email'];
    $kartu_id = $_POST['kartu_id'];

    $sql = "UPDATE pelanggan SET kode = :kode, nama = :nama, jk = :jk, tmp_lahir = :tmp_lahir,
                    tgl_lahir = :tgl_lahir, email = :email, kartu_id = :kartu_id WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':kode', $kode);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':jk', $jk);
    $stmt->bindParam(':tmp_lahir', $tmp_lahir);
    $stmt->bindParam(':tgl_lahir', $tgl_lahir);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':kartu_id', $kartu_id);

    $stmt->execute();

    header('Location: index.php');


}



$sqljenis = "SELECT * FROM kartu";
$rowjenis = $conn->prepare($sqljenis);
$rowjenis->execute();


?>

<form method="post">
    <input type="hidden" name="id" value="<?= $row['id']?>" >

    <label for="">kode</label>
    <input type="text" name="kode" value="<?= $row['kode']?>" > </br></br>

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?= $row['nama']?>" > </br></br>

    <label for="">Jenis Kelamin</label>
    </br>
    <label for="">Laki - laki </label>
    <input type="radio" name="jk" value="L" checked>
    </br>
    <label for="">Perempuan </label>
    <input type="radio" name="jk" value="P"> </br></br>

    <label for="">Tempat Lahir</label>
    <input type="text" name="tmp_lahir" value="<?= $row['tmp_lahir']?>"> <br><br>

    <label for="">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" value="<?= $row['tgl_lahir']?>"> <br><br>

    <label for="">Email</label>
    <input type="email" name="email" value="<?= $row['email']?>"> <br><br>

    <label for="">Kartu ID</label>
    <input type="text" name="kartu_id" value="<?= $row['kartu_id']?>"> 
    
    <br><br>

    <button type="submit" name="submit" >Save</button>
</form>
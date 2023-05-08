    <?php
    require_once 'dbtoko.php';
    include_once 'template\header.php';

    $host = 'localhost';
    $dbname = 'dbtoko';
    $username = 'root';
    $password = '';
    $charset='utf8mb4';


    try{
        $conn = new PDO("mysql: host=$host; dbtoko=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo"Koneksi Gagal " . $e->getMessage();
    } 


    $conn->query("USE dbtoko");

    // Fetch data from database
    $sql = 'SELECT * FROM pesanan' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );

    $no = 1;
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
            table, th, td {
            border: 1px solid black ;

            }
            th, td {
            padding: 10px;
            width: 150px;
            text-align: center;
            }
            th {
            background-color: skyblue;
            }
        </style>
</head>
<body>
<h1>List Pesanan</h1>
        <a class="btn btn-primary" href="form.php" role="button">Create Pelanggan</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Jumlah</th>
                    <th>Deksripsi</th>
                    <th>Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor  =1 ;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['nama_pemesan']; ?></td>
                    <td><?php echo $row['alamat_pemesan']; ?></td>
                    <td><?php echo $row['no_hp']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['jumlah_pesanan']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><?php echo $row['produk_id']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="view.php?id=<?php echo $row['id']; ?>">view</a> |
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus pesanan ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    $nomor++;
                    endwhile;
                  ?>
            </tbody>
        </table>
</body>
</html>
<?php
    include_once 'template\footer.php';
?>
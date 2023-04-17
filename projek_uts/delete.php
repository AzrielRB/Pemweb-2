<?php 
require_once 'dbtoko.php';
$_id=$_GET['id'];
$sql="DELETE FROM pesanan WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_id]);
// redirect page
header('location:list_pesanan.php');
?>
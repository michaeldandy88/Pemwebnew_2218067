<?php
include 'koneksi.php';

$ID_Jenis = $_GET['ID_Jenis'];

$sql = "DELETE FROM jenis_rokok WHERE ID_Jenis=$ID_Jenis";

if (mysqli_query($koneksi, $sql)) {
    echo "Data deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: admin.php');
?>

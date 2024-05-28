<?php
include 'koneksi.php';

$ID_Jenis = $_GET['ID_Jenis'];

$Gambar = $_FILES['Gambar']['name'];
$target = "uploads/" . basename($Gambar);

$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$Isi = $_POST['Isi'];

if ($Gambar) {
    $sql = "UPDATE jenis_rokok SET Gambar='$Gambar', Nama='$Nama', Jenis='$Jenis', Isi=$Isi WHERE ID_Jenis=$ID_Jenis";
    move_uploaded_file($_FILES['Gambar']['tmp_name'], $target);
} else {
    $sql = "UPDATE jenis_rokok SET Nama='$Nama', Jenis='$Jenis', Isi=$Isi WHERE ID_Jenis=$ID_Jenis";
}

if (mysqli_query($koneksi, $sql)) {
    echo "Data updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

header('Location: admin.php');
?>

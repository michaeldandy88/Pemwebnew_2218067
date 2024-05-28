<?php
include 'koneksi.php';

// Ambil data dari form
$Gambar = $_FILES['Gambar']['name'];
$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$Isi = $_POST['Isi'];
$target = "uploads/" . basename($Gambar);

// Simpan data ke database
$sql = "INSERT INTO jenis_rokok (Nama,Gambar, Jenis, Isi) VALUES ('$Nama','$Gambar', '$Jenis', $Isi)";

if (mysqli_query($koneksi, $sql)) {
    // Pindahkan file gambar ke folder uploads
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        echo "Data added successfully";
    } else {
        echo "Failed to upload image";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

// Redirect ke halaman admin.php
header('Location: admin.php');
?>

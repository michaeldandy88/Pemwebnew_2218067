<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $jumlah = $_POST['detail-jumlah'];
    $harga = $_POST['detail-harga'];
    $nama = $_POST['detail-namarokok'];
    $status = $_POST['detail-Status'] ; 
    $tanggal = date('Y-m-d');
    
    // Validate inputs
    if (empty($jumlah) || empty($harga) || empty($nama)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'index.php';
            </script>
        ";
        exit();
    }
    
    // Prepare an insert statement
    $stmt = $koneksi->prepare("INSERT INTO transaksi (Jumlah, Harga, Status, Tanggal) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("idss", $jumlah, $harga, $status, $tanggal);

    if ($stmt->execute()) {
        echo "  
            <script>
                alert('Transaksi Berhasil');
                window.location = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'index.php';
            </script>
        ";
    }

    $stmt->close();
    $koneksi->close();
} else {
    header('location: index.php');
}
?>

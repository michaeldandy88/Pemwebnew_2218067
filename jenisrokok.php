<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jenis Rokok</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Jenis Rokok</a></div>
            <div class="menu">
                <ul>
                    <li><a href="admin.php">Kembali</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <table>
            <thead>
                <tr>
                    <button onclick="tambahData()">Tambah Data</button>
                    <th scope="col" style="width: 20%">Gambar</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Isi</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>   
            </thead>
            <tbody>
        <?php
        // Memasukkan file koneksi.php untuk koneksi ke database
        include 'koneksi.php';
        
        // Mengeksekusi query untuk mengambil data dari tabel jenis_rokok
        $sql = "SELECT * FROM jenis_rokok";
        $result = mysqli_query($koneksi, $sql);
        
        // Memeriksa apakah ada data yang ditemukan
        if (mysqli_num_rows($result) == 0) {
            // Menampilkan data per baris
        }
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                        <td>
                        <img src='/foto/$row[Gambar]' width='200px'>
                            </td>
                        <td>" . $row["Nama"]. "</td>
                        <td>" . $row["Jenis"]. "</td>
                        <td>" . $row["Isi"]. "</td>
                        <td>" . $row["Harga"]. "</td>
                        <td>
                            <button onclick='editData(" . $row["ID_Jenis"]. ")'>Edit</button>
                            <button onclick='deleteData(" . $row["ID_Jenis"]. ")'>Delete</button>
                        </td>
                    </tr>";
            }
        ?>
        </tbody>
    </table>
    <script>
        function tambahData() {
            window.location.href = 'tambahjenis.php';
        }
        function editData(ID_Jenis) {
            window.location.href = 'editjenis.php?ID_Jenis=' + ID_Jenis;
        }
        function deleteData(ID_Jenis) {
            if (confirm("Are you sure you want to delete this item?")) {
                window.location.href = 'hapusjenis.php?ID_Jenis=' + ID_Jenis;
            }
        }
    </script>
</body>
</html>

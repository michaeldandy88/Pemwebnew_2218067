<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jenis Rokok</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Tambah Data</a></div>
            <div class="menu">
                <ul>
                    <li><a href="admin.php">Kembali</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="prosestambahjenis.php" method="POST" enctype="multipart/form-data">
        <label for="Gambar">Gambar:</label>
        <input type="file" id="Gambar" name="Gambar" accept="image/*" required>
        <label for="Nama">Nama:</label>
        <input type="text" id="Nama" name="Nama" required>
        <br>
        <label for="Jenis">Jenis:</label>
        <input type="text" id="Jenis" name="Jenis" required>
        <br>
        <label for="isi">Isi:</label>
        <input type="number" id="Isi" name="Isi" required>
        <br>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>

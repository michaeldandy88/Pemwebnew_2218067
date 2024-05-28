<?php
  include 'koneksi.php';
  $ID_Jenis = $_GET['ID_Jenis'];
  if(!isset($_GET['ID_Jenis'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'jenisrokok.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM jenis_rokok WHERE ID_Jenis = '$ID_Jenis'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Jenis Rokok</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Edit Data</a></div>
            <div class="menu">
                <ul>
                    <li><a href="admin.php">Kembali</a></li>
                </ul>
            </div>
      </nav>
      <form action="prosesedit.php?ID_Jenis=<?php echo $ID_Jenis; ?>" method="POST" enctype="multipart/form-data">
      <label for="Gambar">Gambar:</label>
        <input type="file" ID_Jenis="Gambar" name="Gambar" accept="image/*" required>
        <label for="Nama">Nama:</label>
        <input type="text" ID_Jenis="Nama" name="Nama" required>
        <br>
        <label for="Jenis">Jenis:</label>
        <input type="text" ID_Jenis="Jenis" name="Jenis" required>
        <br>
        <label for="isi">Isi:</label>
        <input type="number" ID_Jenis="Isi" name="Isi" required>
        <br>
        <br>
        <button type="submit">Edit</button>
    </form>
</body>
</html>

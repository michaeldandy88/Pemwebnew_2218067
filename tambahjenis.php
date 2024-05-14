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
      </nav>
    <form id="tambah-form">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
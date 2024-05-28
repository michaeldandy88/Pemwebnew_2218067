<!DOCTYPE html>
<html>
<head>
    <title>Jenis Rokok</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Transaksi</a></div>
            <div class="menu">
                <ul>
                    <li><a href="admin.php">Kembali</a></li>
                </ul>
            </div>
      </nav>
    <table border="1">
        <tr>
            <button onclick="tambahData()">Tambah Data</button>
            <th>No.</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <div class="center">
        <button onclick="editData(1)">Edit</button>
    <button onclick="deleteData(1)">Delete</button>
    </div>
    <script>
         function tambahData() {
            window.location.href = 'transaksi.php';
        }
    </script>
</body>
</html>
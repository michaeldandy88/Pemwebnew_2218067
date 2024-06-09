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
      <button type="button"><a href="cetaktransaksi.php">Cetak Transaksi</a></button>
            </button>
      <table class="table-data">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
               include 'koneksi.php';
               $sql = "SELECT * FROM transaksi";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <h3 style='text-align: center; color: red;'>Data Kosong</h3>
               ";
               } else {
                  while ($data = mysqli_fetch_assoc($result)) {
                     echo "
                     <tr>
                         <td>$data[Tanggal]</td>
                         <td>$data[Jumlah]</td>
                         <td>$data[Harga]</td>
                         <td><p class='success'>$data[Status]</p></td>
                         <td style='display: none;'>$data[Jumlah]</td>
                         <td>
                         <button class='btn_detail' onclick='showDetails(\"$data[Tanggal]\", \"$data[Jumlah]\", \"$data[Harga]\", \"$data[Status]\")'>Detail</button>
                         </td>
                     </tr>
                     ";
                  }
               }
               ?>
                </tbody>
            </table>
    <div class="center">
        <script>
    function showDetails(Tanggal, Jumlah, Harga, Status) {
    alert(
        `Tanggal: ${Tanggal}\nJumlah: ${Jumlah}\nHarga: ${Harga} \nStatus: ${Status}`
    );
}
    </script>
</body>
</html>
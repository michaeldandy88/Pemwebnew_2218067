<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:login.php');
    exit();
}

// Sertakan skrip koneksi ke database
include 'koneksi.php';

$get1 = mysqli_query($koneksi, "SELECT * FROM jenis_rokok");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM transaksi");
$count2 = mysqli_num_rows($get2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <style>
        .row {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.col {
    flex: 1;
    margin: 10px;
}

.card {
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    font-size: 1.2em;
}

.bg-blue {
    background-color: blue;
}

.bg-red {
    background-color: red;
}

.text-white {
    color: white;
}
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="bx bx-grid-alt" id="btn"></i>
        <i class="bx bx-grid-alt" id="cancel"></i>
    </label>
    <center>
        <h2>SELAMAT DATANG ADMIN</h2>
        <div class="row">
            <div class="col">
                <div class="card bg-blue text-white">
                    <h3>Total Jenis Rokok</h3>
                    <p><?php echo $count1; ?></p>
                </div>
            </div>
            <div class="col">
                <div class="card bg-red text-white">
                    <h3>Total Transaksi</h3>
                    <p><?php echo $count2; ?></p>
                </div>
            </div>
        </div>
    </center>
    <div class="sidebar">
        <header>WarungRokok</header>
        <ul>
            <li><a href="admin.php"><i class="dashboard">Dashboard</i></a></li>
            <li><a href="transaction.php"><i class="transaksi">Transaksi</i></a></li>
            <li><a href="jenisrokok.php"><i class="jenis">Jenis</i></a></li>
            <li><a href="logout.php"><i class="logout">Log Out</i></a></li>
        </ul>
    </div>
    <section>
    </section>
</body>
</html>

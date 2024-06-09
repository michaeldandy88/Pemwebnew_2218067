<?php
include 'koneksi.php';

if (isset($_GET['ID_Jenis'])) {
    $id_jenis = $_GET['ID_Jenis'];
    $sql = "SELECT * FROM jenis_rokok WHERE ID_Jenis = $id_jenis";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    } else {
        echo json_encode(["error" => "Data not found"]);
    }
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>

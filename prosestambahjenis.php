<?php
include 'koneksi.php';

// Ambil data dari form
$Gambar = $_FILES['Gambar']['name'];
$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$Isi = $_POST['Isi'];
$Harga = $_POST['Harga'];
$target = "upload/" . basename($Gambar);

// Simpan data ke database
//$sql = "INSERT INTO jenis_rokok (Nama,Gambar, Jenis, Isi) VALUES ('$Nama','$Gambar', '$Jenis', $Isi)";

function upload() {
    $namaFile = $_FILES['Gambar']['name'];
    $error = $_FILES['Gambar']['error'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'tambahjenis.php';
            </script>
        ";

        return false;
    }

// cek apakah yang diupload adalah gambar
$ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));

if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
    echo "
        <script>
            alert('File Harus Berupa Gambar');
            window.location = 'tambahjenis.php';
        </script>
    ";

    return null;
}

// lolos pengecekan, upload gambar
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

$oke =  move_uploaded_file($tmpName, '../foto/' . $namaFileBaru);
return $namaFileBaru;

}

if(isset($_POST['simpan'])) 
$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$Isi = $_POST['Isi'];
$Isi = $_POST['Harga'];
$Gambar = upload();

if(!$Gambar) {
    return false;
}

$sql = "INSERT INTO jenis_rokok VALUES(NULL, '$Gambar', '$Nama', '$Jenis','$Isi','$Harga')";

if(empty($Nama) || empty($Jenis)|| empty($Isi)|| empty($Harga)) {
    echo "
        <script>
            alert('Pastikan Anda Mengisi Semua Data');
            window.location = 'tambahjenis.php';
        </script>
    ";
}elseif(mysqli_query($koneksi, $sql)) {
    echo "
        <script>
            alert('Data Categories Berhasil Ditambahkan');
            window.location = 'jenisrokok.php'
        </script>
    ";
}else {
    echo "
        <script>
            alert('Terjadi Kesalahan');
            window.location = 'tambahjenis.php'
        </script>
    ";
}

// Redirect ke halaman admin.php
header('Location: admin.php');
?>
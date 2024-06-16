<?php
include "koneksi.php";

// Mengambil data dari form
$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) VALUES ('$nama_mhs','$prodi_mhs')")
    or die(mysqli_error($koneksi));

if ($proses) {
    echo "
        <script>
            alert('Data Berhasil Disimpan');
            window.location.href='index.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data Gagal Disimpan');
            window.location.href='index.php';
        </script>";
}
?>

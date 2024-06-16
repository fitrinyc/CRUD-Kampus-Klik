<?php
include "koneksi.php";

$id_peserta = $_GET['id'];
$apakah_proses = $_GET['proses'];

if ($apakah_proses == 1) {
    $nm_mhs = $_POST['nama'];
    $npm_mhs = $_POST['npm'];
    $prodi_mhs = $_POST['prodi'];

    $proses_update_data = mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$nm_mhs', npm_mahasiswa = '$npm_mhs', prodi = '$prodi_mhs' WHERE id = '$id_peserta'")
        or die(mysqli_error($koneksi));
    
    if ($proses_update_data) {
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
} else {
    $proses_ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '".$id_peserta."'")
        or die(mysqli_error($koneksi));
    $data_edit = mysqli_fetch_assoc($proses_ambil);
}
?>

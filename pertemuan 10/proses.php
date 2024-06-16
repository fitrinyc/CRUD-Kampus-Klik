<?php

    include "koneksi.php";

        //mengambil data dari html
        $nama_mhs = $_POST['nama'];
        $prodi_mhs = $_POST['prodi'];
        $perulangan = $_POST['ulangi'];

        $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) 
                VALUES ('$nama_mhs','$prodi_mhs') ")
        or die(mysqli_error($koneksi));

        if($proses){
            echo"<script>alert('Data Berhasil Disimpan')</script>";
        } else echo"<script>alert('Data Gagal Disimpan')</script>";

    // if($nilai_mhs != ""){
    //     if($nilai_mhs >= 85){
    //         $huruf_mutu = 'A';
    //     }else if($nilai_mhs <= 75) {
    //         $huruf_mutu = 'B';
    //     }else if($nilai_mhs >= 65){
    //         $huruf_mutu = 'C';
    //     }else {
    //         $huruf_mutu = 'E';
    //     }

//         //menambahkan perulangan
//         for ($x = 0; $x <= $perulangan;$x++){
//             //echo "<script> alert('" .$npm_mhs. " Nilai mata kuliah anda adalah : ".$huruf_mutu."')</script>";
//             echo $npm_mhs. " Nilai mata kuliah anda adalah : ".$huruf_mutu. "<br>";
//         }
//     }
// ?>
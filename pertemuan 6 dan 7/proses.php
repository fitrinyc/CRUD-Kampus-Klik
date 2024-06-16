<?php
        //mengambil data dari html
        $npm_mhs = $_POST['npm'];
        $nilai_mhs = $_POST['nilai'];
        $perulangan = $_POST['ulangi'];

    if($nilai_mhs != ""){
        if($nilai_mhs >= 85){
            $huruf_mutu = 'A';
        }else if($nilai_mhs <= 75) {
            $huruf_mutu = 'B';
        }else if($nilai_mhs >= 65){
            $huruf_mutu = 'C';
        }else {
            $huruf_mutu = 'E';
        }

        //menambahkan perulangan
        for ($x = 0; $x <= $perulangan;$x++){
            //echo "<script> alert('" .$npm_mhs. " Nilai mata kuliah anda adalah : ".$huruf_mutu."')</script>";
            echo $npm_mhs. " Nilai mata kuliah anda adalah : ".$huruf_mutu. "<br>";
        }
    }
?>
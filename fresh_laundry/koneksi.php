<?php

    $namaserver = "localhost";
    $namadatabase = "fresh_laundry";
    $namapengguna = "root";
    $sandi = "";

    //melakukan pengecekkan
    $koneksi_data = mysqli_connect($namaserver, $namapengguna, $sandi, $namadatabase);

    //cek koneksi
    if(!$koneksi_data){
        die("koneksi dengan database gagal, cek pengaturan : ".mysqli_connect_error());
    }
    else{
        //echo "koneksi data berhasil";
    }
?>
<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $koneksi = mysqli_connect('127.0.0.1:3307', 'root', '', 'modul3_wad');

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
// check connection
    if ($koneksi->connect_error){
        die('Koneksi Gagal! : ' .$koneksi->connect_error);
    }
    echo 'Berhasil Terkoneksi!';
// 
?>
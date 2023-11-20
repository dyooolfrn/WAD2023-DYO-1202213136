<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$db = mysqli_connect('127.0.0.1:3307', 'root', '', 'modul4_wad');
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($db->connect_error){
    die('Koneksi Gagal! : ' .$db->connect_error);
}
echo 'Berhasil Terkoneksi!';
// 
 
?>